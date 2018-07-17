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

var _data;

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var app = new Vue({
  el: '#root',
  data: (_data = {
    firstrun: false,
    firstname: '',
    lastname: '',
    email: '',
    email_body: '',
    subject: '',
    showAddFamily: false,
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
  }, _defineProperty(_data, 'email_body', {
    digital: 'Dag oma <br> Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren. Om dit te doen is er een applicatie genaamd Prisma. Heb je deze week ergens een halfuurtje om een verhaal met een foto toe te voegen? Deze foto\'s kunnen van haar zelf zijn, maar je kan ook gerust een foto van het internet gebruiken. Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel. Groetjes Cedric',
    story: ' Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren. Om dit te doen is er een applicatie genaamd Prisma. Heb je deze week ergens een halfuurtje om een verhaal toe te voegen? Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel. Groetjes Cedric',
    youtube: 'Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren. Om dit te doen is er een applicatie genaamd Prisma. Heb je deze week ergens een halfuurtje om een verhaal met een YouTube video toe te voegen? Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel. Groetjes Cedric',
    general: ''
  }), _defineProperty(_data, 'current_body', "digital"), _data),
  computed: {
    isValid: function isValid() {
      return this.firstname != '' && this.lastname != '' && this.email != '' ? false : 'disabled';
    }
  },
  methods: {
    changeBody: function changeBody(e) {
      this.current_body = e.target.value;
    }
  }
});

/***/ })

/******/ });