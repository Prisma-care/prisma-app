/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 46);
/******/ })
/************************************************************************/
/******/ ({

/***/ 46:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(47);


/***/ }),

/***/ 47:
/***/ (function(module, exports) {

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
  mounted: function mounted() {
    this.loadStories();
  },
  components: {
    'gallery': VueGallery
  },
  computed: {
    selectAll: {
      get: function get() {
        return this.stories ? this.checkedStories.length == this.stories.length : false;
      },
      set: function set(value) {
        var checkedStories = [];

        if (value) {
          console.log(this.stories);
          this.stories.forEach(function (story) {
            checkedStories.push(story.id);
          });
        }

        this.checkedStories = checkedStories;
      }
    },
    isValid: function isValid() {
      return this.newStory != '' && this.newAlbum != '' ? false : 'disabled';
    }
  },
  methods: {

    loadStories: function loadStories() {
      // Init variables
      var self = this;
      var app_id = "appzWizY3DXnCjpgh";
      var app_key = "keyuzHdBFw9QQKZCC";
      this.stories = [];
      this.albums = [];
      this.gallery = [];
      var params = new URLSearchParams(document.location);
      console.log(params.get("name"));
      axios.get("https://api.airtable.com/v0/" + app_id + "/story?view=Feron", {
        headers: {
          Authorization: "Bearer " + app_key
        }
      }).then(function (response) {
        self.stories = response.data.records;
        // self.stories = [];
        var url = window.location.href;
        // check story types
        self.stories.forEach(function (story) {
          // prep story thumbnails based on content type: youtube vs img
          if (story.fields.Youtube || story.fields.Attachments) {
            if (story.fields.Youtube) {
              story.fields.thumbnail = 'https://img.youtube.com/vi/' + story.fields.Youtube + '/maxresdefault.jpg';
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
        self.albums = self.stories.reduce(function (acc, albumData) {
          acc[albumData.fields.Album] = acc[albumData.fields.Album] || [];
          acc[albumData.fields.Album].push(albumData);
          return acc;
        }, {});

        // Sort stories in albums by createdTime
        Object.keys(self.albums).forEach(function (album) {
          self.albums[album].sort(function (album1, album2) {
            return album1.createdTime > album2.createdTime;
          });
        });

        // Add gallery index to album stories to be able to open the right gallery item
        var currentIndex = 0;
        Object.keys(self.albums).forEach(function (album) {
          var i;
          for (i = 0; i < self.albums[album].length; i++) {
            self.albums[album][i].fields.index = currentIndex;
            currentIndex++;
          }
        });

        // Create the gallery from the albums
        Object.keys(self.albums).forEach(function (album) {

          var i;
          for (i = 0; i < self.albums[album].length; i++) {
            var slide = {};
            slide.title = self.albums[album][i].fields.Notes;

            if (self.albums[album][i].fields.type == "youtube") {
              slide.href = 'https://www.youtube.com/watch?v=' + self.albums[album][i].fields.Youtube;
              slide.type = 'text/html';
              slide.youtube = self.albums[album][i].fields.Youtube;
              slide.poster = 'https://img.youtube.com/vi/' + self.albums[album][i].fields.Youtube + '/maxresdefault.jpg';
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
        console.log(error);
      });
    },

    showMediaPreview: function showMediaPreview(mediaType) {
      this.previewType = mediaType;
    },

    addYoutube: function addYoutube() {
      this.videoAdded = true;
    },
    hideMedia: function hideMedia() {
      this.previewType = false;
    }
  }
});

/***/ })

/******/ });