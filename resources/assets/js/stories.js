
var vm2 = new Vue({
  el: 'main',
  data: {
    albums: [],
    stories: [],
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
  mounted: function(){
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
  loadStories: function(){
      // Init variables
      var self = this;
      var app_id = "appzWizY3DXnCjpgh";
      var app_key = "keyuzHdBFw9QQKZCC";
      this.stories = [];
      this.albums = [];
      this.gallery = [];
      axios.get(
        "https://api.airtable.com/v0/"+app_id+"/story?view=Feron",
        { 
          headers: { Authorization: "Bearer "+app_key } 
        }
        ).then(function(response){
          self.stories = response.data.records;

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

          var currentIndex = 0;
          Object.keys(self.albums).forEach((album) => {
            var i;
            for (i = 0; i < self.albums[album].length; i++) {
              self.albums[album][i].fields.index = currentIndex;
              console.log(currentIndex + " ");
              currentIndex++;
            }
          });

          var i;
          for (i = 0; i < self.stories.length; i++) {
            console.log(self.stories[i].fields.Attachments[0].thumbnails.large.url);
            console.log(self.stories[i].fields.Notes);

            var slide = { };
            slide.title = self.stories[i].fields.Notes;
            slide.href = self.stories[i].fields.Attachments[0].thumbnails.large.url;
            slide.type = 'image/jpeg';
            self.gallery.push(slide);
          }

        }).catch(function(error){
          console.log(error)
        })
      },

      showMediaPreview: function(mediaType) {
        console.log(mediaType)
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