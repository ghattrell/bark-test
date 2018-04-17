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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$(document).ready(function () {


  var loadEntries = function loadEntries() {
    $.ajax({
      url: '/api/entries',
      error: function error(_error) {
        console.log(_error);
      },
      success: function success(data) {
        $.each(data.payload, function (index, entry) {
          var $title     = $('<h3>').text(entry.full_name);
          var $createdAt = $('<h6>').text(entry.created_at)
          var $message   = $('<p>').text(entry.message);
          $('.entries').append($title).append($createdAt).append($message);
        });
      },
      type: 'GET'
    });
  };

    $('#submit').click(function() {
        $.ajax({
          url: '/api/entries',
          type: 'POST',
          dataType: 'json',
          data: {
              full_name : $("#full_name").val(),
              message   : $("#comment").val(),
          },
          error: function error(_error) {
            console.log(_error);
          },
          success: function success(data) {
              var $title     = $('<h3>').text(data.payload.saved_entry.full_name);
              var $createdAt = $('<h6>').text(data.payload.saved_entry.created_at)
              var $message   = $('<p>').text(data.payload.saved_entry.message);
              $('.entries').append($title).append($createdAt).append($message);

              alert('Thanks for the feedback!');
              $("#full_name").val("");
              $("#comment").val("");
          }
        });
    });

  loadEntries();
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);
