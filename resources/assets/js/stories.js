var vm2 = new Vue({
  el: 'main',
  data: {
    albums: [],
    stories: [],
    resident_name: [],
    checkedStories: [],
    isAddStoryVisible: false,
    showStoryActions: false,
    previewType: false,
    newStory: '',
    newAlbum: '',
    youtubeUrl: '',
    gallery: [],
    index: null
  },
  mounted: function () {
    this.loadStories();
  },
  components: {
    'gallery': VueGallery
  },
  computed: {
    selectAll: {
      get: function () {
        return this.stories ? this.checkedStories.length == this.stories.length : false;
      },
      set: function (value) {
        var checkedStories = [];

        if (value) {
          console.log(this.stories);
          this.stories.forEach((story) => {
            checkedStories.push(story.id);
          });
        }

        this.checkedStories = checkedStories;
      }
    },
    isValid() {
      return (this.newStory != '' && this.newAlbum != '') ? false : 'disabled';
    }
  },
  methods: {

    loadStories: function () {
      // Init variables
      var self = this;
      var app_id = "appzWizY3DXnCjpgh";
      var app_key = "keyuzHdBFw9QQKZCC";
      this.resident_name = [];
      this.stories = [];
      this.albums = [];
      this.gallery = [];
      let apiUrl = "";
      if (window.location.href === "http://146.185.134.55/residents/ericengelen/stories") {
        apiUrl = "EricEngelen"
      } else if (window.location.href === "http://146.185.134.55/residents/georgetteveekmans/stories") {
        apiUrl = "GeorgetteVeekmans"
      } else if (window.location.href === "http://146.185.134.55/residents/rosemariedrouet/stories") {
        apiUrl = "RoseMarieDrouet"
      } else if (window.location.href === "http://146.185.134.55/residents/mariejoseemertens/stories") {
        apiUrl = "MarieJoséeMertens"
      } else if (window.location.href === "http://146.185.134.55/residents/rosaandries/stories") {
        apiUrl = "RosaAndries"
      } else if (window.location.href === "http://146.185.134.55/residents/louisadevos/stories") {
        apiUrl = "devos"
      } else if (window.location.href === "http://146.185.134.55/residents/feron/stories") {
        apiUrl = "Feron"
      } else if (window.location.href === "http://146.185.134.55/residents/magdawouters/stories") {
        apiUrl = "Wouters"
      } else if (window.location.href === "http://146.185.134.55/residents/miaons/stories") {
        apiUrl = "OnsMia"
      }
       
      let url = window.location.href;
      if(url.includes("ericengelen"))          apiUrl = "EricEngelen";
      if(url.includes("georgetteveekmans"))    apiUrl = "GeorgetteVeekmans";
      if(url.includes("rosemariedrouet"))      apiUrl = "RoseMarieDrouet";
      if(url.includes("mariejoseemertens"))    apiUrl = "MarieJoséeMertens";
      if(url.includes("rosaandries"))          apiUrl = "RosaAndries";
      if(url.includes("louisadevos"))          apiUrl = "devos";
      if(url.includes("feron"))                apiUrl = "Feron";
      if(url.includes("magdawouters"))         apiUrl = "Wouters";
      if(url.includes("irma"))                 apiUrl = "irmavanrossem";

      axios.get(
        "https://api.airtable.com/v0/" + app_id + "/story?view=" + apiUrl, {
          headers: {
            Authorization: "Bearer " + app_key
          }
        }
        ).then(function (response) {
          self.stories = response.data.records;
        // self.stories = [];
        const url = window.location.href;
        console.log(self.stories[0]['fields']['resident-name']);
        self.resident_name = self.stories[0]['fields']['resident-name'];
        // check story types
        self.stories.forEach((story) => {
          // prep story thumbnails based on content type: youtube vs img
          if (story.fields.Youtube || story.fields.Attachments) {
            if (story.fields.Youtube) {
              story.fields.thumbnail = 'https://img.youtube.com/vi/' + story.fields.Youtube + '/hqdefault.jpg';
              story.fields.type = 'youtube';
            } else {
              story.fields.thumbnail = story.fields.Attachments[0].thumbnails.large.url;
              story.fields.type = 'image';
            }
          } else {
            story.fields.type = 'text';
          }
        });

        // Group stories in albums
        self.albums = self.stories.reduce((acc, albumData) => {
          acc[albumData.fields.Album] = acc[albumData.fields.Album] || [];
          acc[albumData.fields.Album].push(albumData);
          return acc;
        }, {});

        // Sort stories in albums by createdTime
        Object.keys(self.albums).forEach((album) => {
          self.albums[album].sort((album1, album2) => album1.createdTime > album2.createdTime)
        });

        // Add gallery index to album stories to be able to open the right gallery item
        var currentIndex = 0;
        Object.keys(self.albums).forEach((album) => {
          var i;
          for (i = 0; i < self.albums[album].length; i++) {
            self.albums[album][i].fields.index = currentIndex;
            currentIndex++;
          }
        });

        // Create the gallery from the albums
        Object.keys(self.albums).forEach((album) => {

          var i;
          for (i = 0; i < self.albums[album].length; i++) {
            var slide = {};
            slide.title = self.albums[album][i].fields.Notes;

            if (self.albums[album][i].fields.type == "youtube") {
              slide.href = 'https://www.youtube.com/watch?v=' + self.albums[album][i].fields.Youtube;
              slide.type = 'text/html';
              slide.youtube = self.albums[album][i].fields.Youtube;
              slide.poster = 'https://img.youtube.com/vi/' + self.albums[album][i].fields.Youtube + '/hqdefault.jpg';
            }

            if (self.albums[album][i].fields.type == "image") {
              slide.href = self.albums[album][i].fields.Attachments[0].thumbnails.large.url;
              slide.type = 'image/jpeg';
            }

            if (self.albums[album][i].fields.type == "text") {
              slide.href = "http://anything.test/img/tmp/feronback.jpg";
              slide.type = 'image/jpeg';
            }

            self.gallery.push(slide);
          }
        });

      }).catch(function (error) {
        console.log(error)
      })
    },

    showMediaPreview: function (mediaType) {
      this.previewType = mediaType;
    },

    addYoutube() {
      this.videoAdded = true;
    },

    hideMedia() {
      this.previewType = false;
    }
  }
});