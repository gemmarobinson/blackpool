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
/******/ 	__webpack_require__.p = "/wp-content/themes/blackpool/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 19);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ }),

/***/ 19:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(20);


/***/ }),

/***/ 20:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__assets_editor_json__ = __webpack_require__(21);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__assets_editor_json__);


wp.domReady(function () {
  /** Handle block blacklist */
  __WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default.a.unregisterBlocks.forEach(function (block) {
    wp.blocks.unregisterBlockType(block)
  })

  /** Unregister styles */
  for (var key in __WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default.a.unregisterBlockStyles) {
    console.log(__WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default.a.unregisterBlockStyles[key])
    wp.blocks.unregisterBlockStyle(key, __WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default.a.unregisterBlockStyles[key])
  }

  /** Register styles */
  for (var key$1 in __WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default.a.registerBlockStyles) {
    console.log(__WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default.a.registerBlockStyles[key$1])
    wp.blocks.registerBlockStyle(key$1, __WEBPACK_IMPORTED_MODULE_0__assets_editor_json___default.a.registerBlockStyles[key$1])
  }
})

jQuery(document).ready(function(){
  jQuery("html").css("font-size", "62.5%");
  setInterval(function(){ jQuery(".aos-init").addClass("aos-animate") }, 1000);
});

/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),

/***/ 21:
/***/ (function(module, exports) {

module.exports = {"styles":{"bootstrap-enabled":"true","fontSizes":{"small":"12","normal":"16","large":"20","larger":"36"},"colors":{"primary":"#525ddc","secondary":"#6c757d","light":"#f8f9fa","dark":"#343a40","white":"rgb(255, 255, 255)","black":"rgb(0, 0, 0)"},"border-radii":{"slight":"15px","round":"50%"},"containers":{"medium":"600px","large":"768px","extra-large":"900px"},"breakpoints":{"medium":"576px","large":"676px","extra-large":"992px"},"wide-align":{"width":"80%","max-width":"1400px"},"spacing":"30px"},"unregisterBlocks":["core/archives","core/categories","core/latest-comments","core/latest-posts","core/verse","core-embed/animoto","core-embed/cloudup","core-embed/collegehumor","core-embed/crowdsignal","core-embed/dailymotion","core-embed/funnyordie","core-embed/hulu","core-embed/issuu","core-embed/kickstarter","core-embed/meetup-com","core-embed/mixcloud","core-embed/photobucket","core-embed/polldaddy","core-embed/reverbnation","core-embed/screencast","core-embed/scribd","core-embed/slideshare","core-embed/smugmug","core-embed/speaker-deck","core-embed/ted","core-embed/tumblr","core-embed/videopress","core-embed/wordpress-tv","core/paragraph","core/table","core/list","core/quote","core/code","core/freeform","core/preformatted","core/pullquote","core/heading","core/image","core/video","core/gallery","core/audio","core/file","core/cover","core/buttons","core/text-columns","core/media-text","core/more","core/nextpage","core/separator","core/spacer","core/columns","core/embed","core/group","core/shortcode","core/archives","core/categories","core/latest-comments","core/latest-posts","core/calendar","core/rss","core/search","core/tag-cloud","core/html","core/page-list","core/query","core/post-title","core/post-content","core/post-date","core/site-tagline","core/site-logo","core/site-title","core/query-title","core/post-terms","core/post-excerpt","core/post-featured-image","core/social-links","core/loginout","core/navigation","core/post-author","core/post-comments","core/term-description","core/post-next","core/post-previous","custom/gravityforms","yoast/faq-block","yoast/how-to-block","yoast-seo/breadcrumbs","gravityforms/form"],"unregisterBlockStyles":{"core/separator":"dots"},"registerBlockStyles":{"core/separator":{"name":"dots","label":"Dots"}}}

/***/ })

/******/ });
//# sourceMappingURL=editor.js.map