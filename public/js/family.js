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
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

var app = new Vue({
  el: '#root',
  data: {
    firstrun: false,
    residentName: 'Lea',
    firstname: '',
    lastname: '',
    email: '',
    showAddFamily: false,
    step: 1,
    alert: false,
    message: "",
    example: '<p class="card-text">Met de familie verzamelen we verhalen van Lea die ik aan het rusthuis ga geven. Hiermee kan het personeel Lea dan beter leren kennen. </p>\n    <p class="card-text">Help je mee? Kan je deze week de tijd nemen om enkele belangrijke foto\'s te scannen?</p>',
    form: {
      firstname: "",
      lastname: "",
      email: "",
      subject: ""
    },
    familyMembers: [{
      "id": 1,
      "name": "Georgette",
      "relationship": "Vrouw",
      "email": "georgette@gmail.com",
      "numStories": 11
    }, {
      "id": 2,
      "name": "Philipe",
      "relationship": "Zoon",
      "email": "philippe.feron@gmail.com",
      "numStories": 16
    }]
  },
  computed: {
    isValid: function isValid() {
      return (this.form.firstname !== "", this.form.lastname !== "", this.form.email !== "", this.form.subject !== "") ? false : "disabled";
    },
    isMessageFilled: function isMessageFilled() {
      return this.message.length <= 5 ? false : "disabled";
    },
    isValidMessage: function isValidMessage() {
      return this.message !== "" && this.message.length >= 5 ? false : "disabled";
    }
  },
  methods: {
    prev: function prev() {
      this.step--;
    },
    next: function next() {
      this.step++;
    },
    changeExample: function changeExample(e) {
      this.current_example = e.target.value;
      e.target.value.addClass;
    },
    fillMessage: function fillMessage() {
      htmlMessage = this.example;
      plainMessage = htmlMessage.replace(/<[^>]+>/g, '');
      this.message = plainMessage;
    },
    send: function send() {
      var _this = this;

      this.form.lastname = "";
      this.form.firstname = "";
      this.form.email = "";
      this.alert = true;
      setTimeout(function () {
        _this.alert = false;
      }, 5000);
    }
  }
});

/***/ })

/******/ });