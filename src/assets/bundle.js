/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./index.js":
/*!******************!*\
  !*** ./index.js ***!
  \******************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _frontend_general_general_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../frontend/general/general.css */ \"../frontend/general/general.css\");\n/* harmony import */ var _frontend_sections_main_section_style_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../frontend/sections/main_section/style.css */ \"../frontend/sections/main_section/style.css\");\n/* harmony import */ var _frontend_sections_cases_section_style_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../frontend/sections/cases_section/style.css */ \"../frontend/sections/cases_section/style.css\");\n/* harmony import */ var _frontend_sections_reviews_section_style_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../frontend/sections/reviews_section/style.css */ \"../frontend/sections/reviews_section/style.css\");\n/* harmony import */ var _frontend_sections_contacts_section_style_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../frontend/sections/contacts_section/style.css */ \"../frontend/sections/contacts_section/style.css\");\n/* harmony import */ var _frontend_sections_garantee_section_style_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../frontend/sections/garantee_section/style.css */ \"../frontend/sections/garantee_section/style.css\");\n/* harmony import */ var _frontend_components_fixed_button_fixed_button_css__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../frontend/components/fixed_button/fixed_button.css */ \"../frontend/components/fixed_button/fixed_button.css\");\n/* harmony import */ var _frontend_modal_privacy_privacy_css__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../frontend/modal/privacy/privacy.css */ \"../frontend/modal/privacy/privacy.css\");\n/* harmony import */ var _frontend_modal_contact_contact_css__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../frontend/modal/contact/contact.css */ \"../frontend/modal/contact/contact.css\");\n/* harmony import */ var _frontend_modal_project_project_css__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../frontend/modal/project/project.css */ \"../frontend/modal/project/project.css\");\n/* harmony import */ var _frontend_modal_result_result_css__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../frontend/modal/result/result.css */ \"../frontend/modal/result/result.css\");\n/* harmony import */ var _frontend_general_general_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../frontend/general/general.js */ \"../frontend/general/general.js\");\n/* harmony import */ var _frontend_general_general_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(_frontend_general_general_js__WEBPACK_IMPORTED_MODULE_11__);\n/* harmony import */ var _frontend_general_send_form_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../frontend/general/send_form.js */ \"../frontend/general/send_form.js\");\n/* harmony import */ var _frontend_general_send_form_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(_frontend_general_send_form_js__WEBPACK_IMPORTED_MODULE_12__);\n/* harmony import */ var _frontend_sections_main_section_script_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../frontend/sections/main_section/script.js */ \"../frontend/sections/main_section/script.js\");\n/* harmony import */ var _frontend_sections_main_section_script_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(_frontend_sections_main_section_script_js__WEBPACK_IMPORTED_MODULE_13__);\n/* harmony import */ var _frontend_sections_cases_section_script_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ../frontend/sections/cases_section/script.js */ \"../frontend/sections/cases_section/script.js\");\n/* harmony import */ var _frontend_sections_cases_section_script_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(_frontend_sections_cases_section_script_js__WEBPACK_IMPORTED_MODULE_14__);\n/* harmony import */ var _frontend_sections_reviews_section_script_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ../frontend/sections/reviews_section/script.js */ \"../frontend/sections/reviews_section/script.js\");\n/* harmony import */ var _frontend_sections_reviews_section_script_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(_frontend_sections_reviews_section_script_js__WEBPACK_IMPORTED_MODULE_15__);\n/* harmony import */ var _frontend_sections_contacts_section_script_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ../frontend/sections/contacts_section/script.js */ \"../frontend/sections/contacts_section/script.js\");\n/* harmony import */ var _frontend_sections_contacts_section_script_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(_frontend_sections_contacts_section_script_js__WEBPACK_IMPORTED_MODULE_16__);\n/* harmony import */ var _frontend_sections_garantee_section_script_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ../frontend/sections/garantee_section/script.js */ \"../frontend/sections/garantee_section/script.js\");\n/* harmony import */ var _frontend_sections_garantee_section_script_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(_frontend_sections_garantee_section_script_js__WEBPACK_IMPORTED_MODULE_17__);\n// Css\n\n\n\n\n\n\n\n\n\n\n\n\n// Js\n\n\n\n\n\n\n\n\n//# sourceURL=webpack://src/./index.js?");

/***/ }),

/***/ "../frontend/general/general.js":
/*!**************************************!*\
  !*** ../frontend/general/general.js ***!
  \**************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  AOS.init({\n    disable: 'mobile',\n    once: true\n  });\n  AOS.init({\n    disable: function disable() {\n      var maxWidth = 768;\n      return window.innerWidth < maxWidth;\n    }\n  });\n});\n\n//# sourceURL=webpack://src/../frontend/general/general.js?");

/***/ }),

/***/ "../frontend/general/send_form.js":
/*!****************************************!*\
  !*** ../frontend/general/send_form.js ***!
  \****************************************/
/***/ (() => {

eval("function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }\nfunction _possibleConstructorReturn(t, e) { if (e && (\"object\" == _typeof(e) || \"function\" == typeof e)) return e; if (void 0 !== e) throw new TypeError(\"Derived constructors may only return object or undefined\"); return _assertThisInitialized(t); }\nfunction _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); return e; }\nfunction _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }\nfunction _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }\nfunction _inherits(t, e) { if (\"function\" != typeof e && null !== e) throw new TypeError(\"Super expression must either be null or a function\"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, \"prototype\", { writable: !1 }), e && _setPrototypeOf(t, e); }\nfunction _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }\nfunction _typeof(o) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && \"function\" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? \"symbol\" : typeof o; }, _typeof(o); }\nfunction _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError(\"Cannot call a class as a function\"); }\nfunction _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, \"value\" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }\nfunction _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, \"prototype\", { writable: !1 }), e; }\nfunction _toPropertyKey(t) { var i = _toPrimitive(t, \"string\"); return \"symbol\" == _typeof(i) ? i : i + \"\"; }\nfunction _toPrimitive(t, r) { if (\"object\" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || \"default\"); if (\"object\" != _typeof(i)) return i; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (\"string\" === r ? String : Number)(t); }\n// =================================\n// \t\tInterfaces\n// =================================\nvar IValidator = /*#__PURE__*/function () {\n  function IValidator(error_type) {\n    _classCallCheck(this, IValidator);\n    this.error_type = error_type;\n  }\n  return _createClass(IValidator, [{\n    key: \"handle\",\n    value: function handle($element, value) {}\n  }]);\n}();\nvar IFormatter = /*#__PURE__*/function () {\n  function IFormatter() {\n    _classCallCheck(this, IFormatter);\n  }\n  return _createClass(IFormatter, [{\n    key: \"handle\",\n    value: function handle(value) {}\n  }]);\n}(); // =================================\n// \t\tFormatters\n// =================================\nvar GeneralFormatter = /*#__PURE__*/function (_IFormatter) {\n  function GeneralFormatter() {\n    _classCallCheck(this, GeneralFormatter);\n    return _callSuper(this, GeneralFormatter, arguments);\n  }\n  _inherits(GeneralFormatter, _IFormatter);\n  return _createClass(GeneralFormatter, [{\n    key: \"handle\",\n    value: function handle(value) {\n      return value.trim();\n    }\n  }]);\n}(IFormatter);\nvar PhoneFormatter = /*#__PURE__*/function (_IFormatter2) {\n  function PhoneFormatter() {\n    _classCallCheck(this, PhoneFormatter);\n    return _callSuper(this, PhoneFormatter, arguments);\n  }\n  _inherits(PhoneFormatter, _IFormatter2);\n  return _createClass(PhoneFormatter, [{\n    key: \"handle\",\n    value: function handle(value) {\n      return value.replace(/[^0-9\\+]/g, '');\n    }\n  }]);\n}(IFormatter);\nvar FormatterHandler = /*#__PURE__*/function () {\n  function FormatterHandler() {\n    _classCallCheck(this, FormatterHandler);\n    this.formatters = {};\n  }\n  return _createClass(FormatterHandler, [{\n    key: \"addFormatter\",\n    value: function addFormatter($element, validators) {\n      var elementId = $element.get(0).id;\n      if (!this.formatters[elementId]) {\n        this.formatters[elementId] = [];\n      }\n      this.formatters[elementId] = this.formatters[elementId].concat(validators);\n    }\n  }, {\n    key: \"format\",\n    value: function format($element, value) {\n      var elementId = $element.get(0).id;\n      if (!this.formatters[elementId]) {\n        return value;\n      }\n      this.formatters[elementId].forEach(function (formatter) {\n        value = formatter.handle(value);\n      });\n      return value;\n    }\n  }, {\n    key: \"formatAll\",\n    value: function formatAll() {\n      var _this2 = this;\n      var validationResult = true;\n      Object.keys(this.formatters).forEach(function (key) {\n        var $el = $('#' + key);\n        var validationCurrentResult = _this2.validate($el);\n        validationResult = validationResult && validationCurrentResult;\n      });\n    }\n  }]);\n}(); // =================================\n// \t\tValidators\n// =================================\nvar GeneralRequiredValidator = /*#__PURE__*/function (_IValidator) {\n  function GeneralRequiredValidator() {\n    _classCallCheck(this, GeneralRequiredValidator);\n    return _callSuper(this, GeneralRequiredValidator, arguments);\n  }\n  _inherits(GeneralRequiredValidator, _IValidator);\n  return _createClass(GeneralRequiredValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      return true;\n    }\n  }]);\n}(IValidator);\nvar GeneralRequiredStringValidator = /*#__PURE__*/function (_IValidator2) {\n  function GeneralRequiredStringValidator() {\n    _classCallCheck(this, GeneralRequiredStringValidator);\n    return _callSuper(this, GeneralRequiredStringValidator, arguments);\n  }\n  _inherits(GeneralRequiredStringValidator, _IValidator2);\n  return _createClass(GeneralRequiredStringValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.val();\n      return value.trim().length > 0;\n    }\n  }]);\n}(IValidator);\nvar NameLengthValidator = /*#__PURE__*/function (_IValidator3) {\n  function NameLengthValidator() {\n    _classCallCheck(this, NameLengthValidator);\n    return _callSuper(this, NameLengthValidator, arguments);\n  }\n  _inherits(NameLengthValidator, _IValidator3);\n  return _createClass(NameLengthValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.val();\n      return !isRequired && value == \"\" || value.trim().length <= 62;\n    }\n  }]);\n}(IValidator);\nvar EmailLengthValidator = /*#__PURE__*/function (_IValidator4) {\n  function EmailLengthValidator() {\n    _classCallCheck(this, EmailLengthValidator);\n    return _callSuper(this, EmailLengthValidator, arguments);\n  }\n  _inherits(EmailLengthValidator, _IValidator4);\n  return _createClass(EmailLengthValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.val();\n      return !isRequired && value == \"\" || value.trim().length <= 62;\n    }\n  }]);\n}(IValidator);\nvar EmailFormatValidator = /*#__PURE__*/function (_IValidator5) {\n  function EmailFormatValidator() {\n    _classCallCheck(this, EmailFormatValidator);\n    return _callSuper(this, EmailFormatValidator, arguments);\n  }\n  _inherits(EmailFormatValidator, _IValidator5);\n  return _createClass(EmailFormatValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/;\n      var value = $el.val();\n      return !isRequired && value == \"\" || emailPattern.test(value.trim());\n    }\n  }]);\n}(IValidator);\nvar PhoneFormatValidator = /*#__PURE__*/function (_IValidator6) {\n  function PhoneFormatValidator() {\n    _classCallCheck(this, PhoneFormatValidator);\n    return _callSuper(this, PhoneFormatValidator, arguments);\n  }\n  _inherits(PhoneFormatValidator, _IValidator6);\n  return _createClass(PhoneFormatValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var rawFormat = $el.attr('placeholder');\n      var format = rawFormat.replace(/\\d/g, '\\\\d');\n      var phonePattern = new RegExp(format);\n      var value = $el.val();\n      return !isRequired && value == \"\" || phonePattern.test(value.trim());\n    }\n  }]);\n}(IValidator);\nvar TelegramLengthValidator = /*#__PURE__*/function (_IValidator7) {\n  function TelegramLengthValidator() {\n    _classCallCheck(this, TelegramLengthValidator);\n    return _callSuper(this, TelegramLengthValidator, arguments);\n  }\n  _inherits(TelegramLengthValidator, _IValidator7);\n  return _createClass(TelegramLengthValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.val();\n      return !isRequired && value == \"\" || value.trim().length <= 33;\n    }\n  }]);\n}(IValidator);\nvar TelegramStartsWithAtValidator = /*#__PURE__*/function (_IValidator8) {\n  function TelegramStartsWithAtValidator() {\n    _classCallCheck(this, TelegramStartsWithAtValidator);\n    return _callSuper(this, TelegramStartsWithAtValidator, arguments);\n  }\n  _inherits(TelegramStartsWithAtValidator, _IValidator8);\n  return _createClass(TelegramStartsWithAtValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.val();\n      return !isRequired && value == \"\" || value.trim().startsWith('@');\n    }\n  }]);\n}(IValidator);\nvar TelegramValidator = /*#__PURE__*/function (_IValidator9) {\n  function TelegramValidator() {\n    _classCallCheck(this, TelegramValidator);\n    return _callSuper(this, TelegramValidator, arguments);\n  }\n  _inherits(TelegramValidator, _IValidator9);\n  return _createClass(TelegramValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.val();\n      var telegramPattern = /^[a-zA-Z][a-zA-Z0-9_]{4,31}$/;\n      return !isRequired && value == \"\" || telegramPattern.test(value.trim().substring(1));\n    }\n  }]);\n}(IValidator);\nvar MessageLengthValidator = /*#__PURE__*/function (_IValidator10) {\n  function MessageLengthValidator() {\n    _classCallCheck(this, MessageLengthValidator);\n    return _callSuper(this, MessageLengthValidator, arguments);\n  }\n  _inherits(MessageLengthValidator, _IValidator10);\n  return _createClass(MessageLengthValidator, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.val();\n      // console.log(value)\n      return !isRequired && value == \"\" || value.trim().length <= 125;\n    }\n  }]);\n}(IValidator);\nvar ConsetValidation = /*#__PURE__*/function (_IValidator11) {\n  function ConsetValidation() {\n    _classCallCheck(this, ConsetValidation);\n    return _callSuper(this, ConsetValidation, arguments);\n  }\n  _inherits(ConsetValidation, _IValidator11);\n  return _createClass(ConsetValidation, [{\n    key: \"handle\",\n    value: function handle($el, isRequired) {\n      var value = $el.prop('checked');\n      return !isRequired || value;\n    }\n  }]);\n}(IValidator);\nvar ValidatorHandler = /*#__PURE__*/function () {\n  function ValidatorHandler() {\n    _classCallCheck(this, ValidatorHandler);\n    this.validators = {};\n  }\n  return _createClass(ValidatorHandler, [{\n    key: \"addValidators\",\n    value: function addValidators($element, validators) {\n      var elementId = $element.get(0).id;\n      if (!this.validators[elementId]) {\n        this.validators[elementId] = [];\n      }\n      this.validators[elementId] = this.validators[elementId].concat(validators);\n    }\n  }, {\n    key: \"validate\",\n    value: function validate($element) {\n      var elementId = $element.get(0).id;\n      if (!this.validators[elementId]) {\n        return true;\n      }\n      var isRequired = Object.entries(this.validators[elementId]).some(function (validator) {\n        return validator[1] instanceof GeneralRequiredStringValidator || validator[1] instanceof GeneralRequiredValidator;\n      });\n      var validationResult = true;\n      var _this = this;\n      var isShowErrorOccurred = false;\n      this.validators[elementId].forEach(function (validator) {\n        validationResult = validator.handle($element, isRequired);\n        if (!validationResult && !isShowErrorOccurred) {\n          isShowErrorOccurred = true;\n          _this.showError($element, validator.error_type);\n        } else {\n          _this.hideError($element, validator.error_type, isShowErrorOccurred);\n        }\n      });\n      return validationResult;\n    }\n  }, {\n    key: \"validateAll\",\n    value: function validateAll() {\n      var _this3 = this;\n      var validationResult = true;\n      Object.keys(this.validators).forEach(function (key) {\n        var $el = $('#' + key);\n        var validationCurrentResult = _this3.validate($el);\n        validationResult = validationResult && validationCurrentResult;\n      });\n      return validationResult;\n    }\n  }, {\n    key: \"hideError\",\n    value: function hideError($element, error_type, isShowErrorOccurred) {\n      var errorElId = '#' + $element.get(0).id + '-' + error_type;\n      $(errorElId).addClass('d-none');\n      if (!isShowErrorOccurred) {\n        $(errorElId).parent().parent().find('.contact_form__input').removeClass('contact_form__error_state');\n        $element.parent().find('.contact_form_textarea__counter').removeClass('contact_form_textarea_error__counter');\n      }\n    }\n  }, {\n    key: \"showError\",\n    value: function showError($element, error_type) {\n      var errorElId = '#' + $element.get(0).id + '-' + error_type;\n      $(errorElId).removeClass('d-none');\n      $(errorElId).parent().parent().find('.contact_form__input').addClass('contact_form__error_state');\n      $element.parent().find('.contact_form_textarea__counter').addClass('contact_form_textarea_error__counter');\n    }\n  }]);\n}(); // =================================\n// \t\tModels\n// =================================\nvar ApplicationModel = /*#__PURE__*/function () {\n  function ApplicationModel(source, name, email, phone, telegram, message) {\n    _classCallCheck(this, ApplicationModel);\n    this.source = source;\n    this.name = name;\n    this.email = email;\n    this.phone = phone;\n    this.telegram = telegram;\n    this.message = message;\n  }\n  return _createClass(ApplicationModel, [{\n    key: \"getFormData\",\n    value: function getFormData() {\n      return {\n        source: this.source,\n        name: this.name,\n        email: this.email,\n        phone: this.phone,\n        telegram: this.telegram,\n        message: this.message\n      };\n    }\n  }]);\n}(); // =================================\n// \t\tSender\n// =================================\nvar ApplicationSender = /*#__PURE__*/function () {\n  function ApplicationSender(validationHandler, $form) {\n    _classCallCheck(this, ApplicationSender);\n    this.validationHandler = validationHandler;\n    this.$form = $form;\n  }\n  return _createClass(ApplicationSender, [{\n    key: \"trySend\",\n    value: function trySend(model) {\n      if (!this.validationHandler.validateAll()) {\n        return;\n      }\n      var _this = this;\n      var formData = model.getFormData();\n      _this.start_load();\n      $.ajax({\n        type: 'POST',\n        url: '/backend/api/send_application.php',\n        data: formData,\n        success: function success(response) {\n          // console.log(response)\n\n          // clear all fields from the form\n          _this.$form.find('input[type=\"text\"], textarea').val('');\n          _this.$form.find('input[type=\"checkbox\"]').prop('checked', false);\n          if (JSON.parse(response).success) {\n            _this.redirect_to_result(1);\n          } else {\n            _this.redirect_to_result(0);\n          }\n        },\n        error: function error(response) {\n          _this.redirect_to_result(0);\n        },\n        complete: function complete() {\n          _this.stop_load();\n        }\n      });\n    }\n  }, {\n    key: \"redirect_to_result\",\n    value: function redirect_to_result(isSuccess) {\n      // console.log(isSuccess)\n      // window.location.href = `/result.php?isSuccess=${isSuccess}`\n\n      $resultModal = $('#resulttModal');\n      var resultIndex = isSuccess ? 0 : 1;\n      $.ajax({\n        type: 'GET',\n        url: \"/backend/api/get_result_data.php\",\n        success: function success(response) {\n          resultData = JSON.parse(response)[resultIndex];\n\n          // open modal \n          $resultModal.modal('show');\n\n          // set image\n          var $image = $('#resultImage');\n          $image.attr('src', resultData.img);\n\n          // set top text\n          var $header = $('#resultHeader');\n          $header.html(resultData.header);\n\n          // set description\n          var $subheader = $('#resultSubheader');\n          $subheader.html(resultData.desc);\n        }\n      });\n    }\n  }, {\n    key: \"start_load\",\n    value: function start_load() {\n      var blure = $('#backgroundBlure');\n      blure.removeClass('d-none');\n      setTimeout(function () {\n        blure.css('background-color', '#87878796');\n      }, 10);\n\n      // blure.addClass('make-blure')\n\n      $('body').css('overflow', 'hidden');\n      var submit = this.$form.find(':submit');\n      submit.addClass('over-all');\n      submit.prop('disabled', true);\n      submit.find('#contactFormSendText, #formModalSendText').addClass('d-none');\n      submit.find('#contactFormWaitText, #formModalWaitText').removeClass('d-none');\n    }\n  }, {\n    key: \"stop_load\",\n    value: function stop_load() {\n      var blure = $('#backgroundBlure');\n      // blure.removeClass('make-blure')\n      blure.css('background-color', '#ffffff00');\n      setTimeout(function () {\n        blure.addClass('d-none');\n        submit.prop('disabled', false);\n      }, 200);\n      $('body').css('overflow', 'unset');\n      var submit = this.$form.find(':submit');\n      submit.removeClass('over-all');\n      submit.find('#contactFormSendText, #formModalSendText').removeClass('d-none');\n      submit.find('#contactFormWaitText, #formModalWaitText').addClass('d-none');\n    }\n  }]);\n}(); // =================================\n// \t\tPrccess main page\n// =================================\n$(document).ready(function () {\n  var $contactForm = $('#contactForm');\n\n  // prevent errors\n  if ($contactForm.length == 0) return;\n\n  // init\n  var source = $contactForm.attr('source');\n  var validatorHandler = new ValidatorHandler();\n  var formatterHandler = new FormatterHandler();\n  var sender = new ApplicationSender(validatorHandler, $contactForm);\n\n  // add validations\n  validatorHandler.addValidators($('#contactsFieldName'), [new GeneralRequiredStringValidator('general_required'), new NameLengthValidator('name_length')]);\n  validatorHandler.addValidators($('#contactsFieldEmail'), [new GeneralRequiredStringValidator('general_required'), new EmailLengthValidator('email_length'), new EmailFormatValidator('email_validate')]);\n  validatorHandler.addValidators($('#contactsFieldPhone'), [new GeneralRequiredStringValidator('general_required'), new PhoneFormatValidator('phone_validate')]);\n  validatorHandler.addValidators($('#contactsFieldTelegram'), [\n  // new GeneralRequiredStringValidator('general_required'),\n  new TelegramLengthValidator('telegram_length'), new TelegramStartsWithAtValidator('telegram_starts_with_at'), new TelegramValidator('telegram_validate')]);\n  validatorHandler.addValidators($('#contactsFieldMessage'), [new MessageLengthValidator('message_length')]);\n  validatorHandler.addValidators($('#contactsFieldConset'), [new GeneralRequiredValidator('required'), new ConsetValidation('conset_validate')]);\n\n  // add formatters\n  formatterHandler.addFormatter($('#contactsFieldName'), [new GeneralFormatter()]);\n  formatterHandler.addFormatter($('#contactsFieldEmail'), [new GeneralFormatter()]);\n  formatterHandler.addFormatter($('#contactsFieldPhone'), [new GeneralFormatter(), new PhoneFormatter()]);\n  formatterHandler.addFormatter($('#contactsFieldTelegram'), [new GeneralFormatter()]);\n  formatterHandler.addFormatter($('#contactsFieldMessage'), [new GeneralFormatter()]);\n\n  // add event handlers\n  $('#contactForm input, textarea').on('keyup', function () {\n    validatorHandler.validate($(this));\n  });\n  $('#contactForm input, textarea').on('blur', function () {\n    validatorHandler.validate($(this));\n  });\n\n  // on submit handler\n  $contactForm.submit(function (e) {\n    e.preventDefault();\n    var application = new ApplicationModel(source, formatterHandler.format($('#contactsFieldName'), $('#contactsFieldName').val()), formatterHandler.format($('#contactsFieldEmail'), $('#contactsFieldEmail').val()), formatterHandler.format($('#contactsFieldPhone'), $('#contactsFieldPhone').parent().find('.iti__selected-dial-code').html() + $('#contactsFieldPhone').val()), formatterHandler.format($('#contactsFieldTelegram'), $('#contactsFieldTelegram').val()), formatterHandler.format($('#contactsFieldMessage'), $('#contactsFieldMessage').val()), $('#contactsFieldConset').prop('checked'));\n    sender.trySend(application);\n  });\n});\n\n//# sourceURL=webpack://src/../frontend/general/send_form.js?");

/***/ }),

/***/ "../frontend/sections/cases_section/script.js":
/*!****************************************************!*\
  !*** ../frontend/sections/cases_section/script.js ***!
  \****************************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  var $projectModal = $('#projectModal');\n  var swiperBaseConfigs = {\n    slidesPerView: \"auto\",\n    spaceBetween: 10,\n    // loop: true,\n    navigation: {\n      nextEl: '.swiper-button-next',\n      prevEl: '.swiper-button-prev'\n    }\n  };\n  var exteriorSwiper;\n  var interiorSwiper;\n  var openedProject = null;\n  var lightbox;\n  $('#contactModal').on(\"hidden.bs.modal\", function () {\n    if (openedProject !== null) {\n      openedProject.click();\n      openedProject = null;\n    }\n  });\n  $(\".cases_call_modal_button\").click(function () {\n    openedProject = $(this);\n    var projectId = $(this).attr('project-id');\n\n    // set content for the modal \n\n    $.ajax({\n      type: 'GET',\n      url: \"/backend/api/get_appart_data.php?id=\".concat(projectId),\n      success: function success(response) {\n        setModalContent(JSON.parse(response));\n        initSwipers();\n        openModal();\n      }\n    });\n    // exteriorSwiper.update()\n    // interiorSwiper.update()\n  });\n  $projectModal.on(\"hidden.bs.modal\", function () {\n    clearModalContent();\n  });\n  function initSwipers() {\n    if (exteriorSwiper) exteriorSwiper.destroy(true, true);\n    if (interiorSwiper) interiorSwiper.destroy(true, true);\n    if (lightbox) lightbox.destroy();\n    exteriorSwiper = new Swiper('.project_exterior_swiper', swiperBaseConfigs);\n    interiorSwiper = new Swiper('.project_interior_swiper', swiperBaseConfigs);\n    lightbox = GLightbox({\n      selector: '.glightbox',\n      touchNavigation: true,\n      loop: true\n    });\n  }\n  function setModalContent(content) {\n    setContent('#projectName', content.title);\n    setContent('#projectDescription', content.description);\n    multiplyItemsAndFill('#projectDescriptionItem', content.briefs.length, function ($item, index) {\n      var $h3 = $item.find('h3');\n      var $value = $item.find('p');\n      setContent($h3, content.briefs[index].title);\n      setContent($value, content.briefs[index].value);\n    });\n    multiplyItemsAndFill('#projectExteriorItem', content.exterior.length, function ($item, index) {\n      var $img = $item.find('img');\n      var $a = $item.find('a');\n      setHref($a, content.exterior[index].imageLink);\n      setImage($img, content.exterior[index].imageLink);\n    }, function ($baseElement) {\n      $baseElement.find('a').removeClass('glightbox');\n    });\n    multiplyItemsAndFill('#projectInteriorItem', content.interior.length, function ($item, index) {\n      var $img = $item.find('img');\n      var $a = $item.find('a');\n      setHref($a, content.interior[index].imageLink);\n      setImage($img, content.interior[index].imageLink);\n    }, function ($baseElement) {\n      $baseElement.find('a').removeClass('glightbox');\n    });\n    multiplyItemsAndFill('#projectPropertyItem', content.properties.length, function ($item, index) {\n      var $img = $item.find('.project_modal_property__svg');\n      var $title = $item.find('.project_modal_property__title');\n      var $value = $item.find('.project_modal_property__value');\n      setImage($img, content.properties[index].svgLink, content.properties[index].header);\n      setContent($title, content.properties[index].title);\n      setContent($value, content.properties[index].value);\n    });\n    multiplyItemsAndFill('#projectContentItem', content.content.length, function ($item, index) {\n      // const underline_kind = (index % 2 === 0) ? '.project_modal_underliner_left' : '.project_modal_underliner_right'\n\n      var $img = $item.find('img');\n      var $title = $item.find('.project_modal_content__title');\n      var $body = $item.find('.project_modal_content__body__wrapper');\n      var $row = $item.find('.row');\n      if (index % 2 === 0) {\n        $item.addClass('project_modal_underliner_right');\n        $row.addClass('flex-row-reverse');\n      } else {\n        $item.addClass('project_modal_underliner_left');\n        $row.addClass('text-end');\n      }\n\n      // console.log(content.content[index].title)\n\n      setImage($img, content.content[index].imageLink, content.content[index].title);\n      setContent($title, content.content[index].title);\n      setContent($body, content.content[index].body);\n    });\n    var maleSrc = \"/assets/images/comment_1.webp\";\n    var femaleSrc = \"/assets/images/comment_2.webp\";\n    setImage(\".project_modal_comment_info__wrapper img\", content.review.isMale ? maleSrc : femaleSrc, content.review.name);\n    setContent(\".project_modal_comment_info__wrapper h3\", content.review.name);\n    setContent(\".project_modal_comment_info__wrapper p\", \"\".concat(content.review.age, \", \").concat(content.review.placement));\n    setContent(\".project_modal_comment_comment__wrapper p\", content.review.feedback);\n  }\n  function openModal() {\n    $projectModal.modal('show');\n  }\n  function clearModalContent() {\n    removeMultiplies('#projectDescriptionItem');\n    removeMultiplies('#projectExteriorItem', function ($baseElement) {\n      $baseElement.find('a').addClass('glightbox');\n    });\n    removeMultiplies('#projectInteriorItem', function ($baseElement) {\n      $baseElement.find('a').addClass('glightbox');\n    });\n    removeMultiplies('#projectPropertyItem');\n    removeMultiplies('#projectContentItem');\n  }\n  function setContent(itemName, content) {\n    if (!(itemName instanceof String)) {\n      itemName = $projectModal.find(itemName);\n    }\n    itemName.html(content);\n  }\n  function setImage(itemName, src, alt) {\n    if (!(itemName instanceof String)) {\n      itemName = $projectModal.find(itemName);\n    }\n    itemName.attr('src', src).attr('alt', alt);\n  }\n  function setHref(itemName, href) {\n    if (!(itemName instanceof String)) {\n      itemName = $projectModal.find(itemName);\n    }\n    itemName.attr('href', href);\n  }\n  function multiplyItemsAndFill(itemName, count, lambda) {\n    var baseElementAffectLambda = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;\n    var $baseElement = $projectModal.find(itemName);\n    var $parentElement = $baseElement.parent();\n    for (var i = 0; i < count; i++) {\n      // copy element\n      $currentElement = $baseElement.clone();\n      $currentElement.appendTo($parentElement);\n      lambda($currentElement, i);\n    }\n    $baseElement.addClass('d-none');\n    if (baseElementAffectLambda) {\n      baseElementAffectLambda($baseElement);\n    }\n  }\n  function removeMultiplies(itemName) {\n    var baseElementAffectLambda = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;\n    // console.log($projectModal.find(itemName).parent().children().not('.d-none'))\n\n    $projectModal.find(itemName).parent().children().not('.d-none').remove();\n    $projectModal.find(itemName).removeClass('d-none');\n    if (baseElementAffectLambda) {\n      baseElementAffectLambda($projectModal.find(itemName));\n    }\n  }\n});\n\n//# sourceURL=webpack://src/../frontend/sections/cases_section/script.js?");

/***/ }),

/***/ "../frontend/sections/contacts_section/script.js":
/*!*******************************************************!*\
  !*** ../frontend/sections/contacts_section/script.js ***!
  \*******************************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  var phoneInput = $(\"#contactsFieldPhone\");\n  $('.contact_form__input input, textarea').not(phoneInput).bind('blur', function () {\n    if ($(this).val().trim() != '') {\n      return;\n    }\n    $(this).val('');\n    var label = $(this).parent().parent().find('label');\n    label.removeClass('contact_form_placeholder_focused');\n  }).bind('focus', function () {\n    var label = $(this).parent().parent().find('label');\n    label.addClass('contact_form_placeholder_focused');\n  });\n  var label = $(\"label[for=\".concat(phoneInput.get(0).id, \"]\"));\n  label.addClass('contact_form_placeholder_focused');\n  var textareaMaxLength = 126;\n  $('.contact_form_textarea__counter').html(\"\".concat(textareaMaxLength, \"/\").concat(textareaMaxLength));\n  $('.contact_form__input textarea').on('input', function () {\n    this.style.height = \"5px\";\n    this.style.height = this.scrollHeight + \"px\";\n    var textLen = $(this).val().length;\n    $(this).parent().find('.contact_form_textarea__counter').html(\"\".concat(textareaMaxLength - textLen, \"/\").concat(textareaMaxLength));\n  });\n\n  // Init on phone entering county select\n  if (phoneInput.length > 0) {\n    var applicantITI = window.intlTelInput(phoneInput.get(0), {\n      showSelectedDialCode: true,\n      nationalMode: false,\n      initialCountry: \"ru\",\n      utilsScript: \"https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.14/build/js/utils.js\"\n    });\n  }\n  var targetNode = document.getElementsByClassName('iti__selected-dial-code')[0];\n  var last_value = targetNode.innerText;\n  var observer = new MutationObserver(function (mutationsList, observer) {\n    mutationsList.forEach(function (mutation) {\n      if (mutation.type === 'childList' && last_value != targetNode.innerText) {\n        last_value = targetNode.innerText;\n        phoneInput.val('');\n      }\n    });\n  });\n  observer.observe(targetNode, {\n    childList: true,\n    // Listen for changes to the child nodes\n    subtree: true,\n    // Observe the entire subtree (including text nodes)\n    characterData: true // Observe changes to the text of a node\n  });\n});\n\n//# sourceURL=webpack://src/../frontend/sections/contacts_section/script.js?");

/***/ }),

/***/ "../frontend/sections/garantee_section/script.js":
/*!*******************************************************!*\
  !*** ../frontend/sections/garantee_section/script.js ***!
  \*******************************************************/
/***/ (() => {

eval("$(document).ready(function () {});\n\n//# sourceURL=webpack://src/../frontend/sections/garantee_section/script.js?");

/***/ }),

/***/ "../frontend/sections/main_section/script.js":
/*!***************************************************!*\
  !*** ../frontend/sections/main_section/script.js ***!
  \***************************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  var swiper = new Swiper('.main_section_swiper__container', {\n    loop: true,\n    pagination: {\n      el: '.swiper-pagination',\n      clickable: true\n    },\n    navigation: {\n      nextEl: '.swiper-button-next',\n      prevEl: '.swiper-button-prev'\n    }\n  });\n});\n\n//# sourceURL=webpack://src/../frontend/sections/main_section/script.js?");

/***/ }),

/***/ "../frontend/sections/reviews_section/script.js":
/*!******************************************************!*\
  !*** ../frontend/sections/reviews_section/script.js ***!
  \******************************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  var swiper = new Swiper('.reviewSwiper', {\n    slidesPerView: 1,\n    spaceBetween: 10,\n    loop: true,\n    pagination: {\n      el: '.review_swiper__pagination'\n    },\n    autoplay: {\n      delay: 8500,\n      disableOnInteraction: false\n    },\n    breakpoints: {\n      992: {\n        slidesPerView: 2,\n        spaceBetween: 30\n      }\n    }\n  });\n  $('.review_swiper__slide').hover(function () {\n    $(this).addClass('expanded');\n    $(this).siblings().removeClass('expanded');\n  });\n  $('.review_swiper__slide').blur(function () {\n    $(this).removeClass('expanded');\n  });\n});\n\n//# sourceURL=webpack://src/../frontend/sections/reviews_section/script.js?");

/***/ }),

/***/ "../frontend/components/fixed_button/fixed_button.css":
/*!************************************************************!*\
  !*** ../frontend/components/fixed_button/fixed_button.css ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/components/fixed_button/fixed_button.css?");

/***/ }),

/***/ "../frontend/general/general.css":
/*!***************************************!*\
  !*** ../frontend/general/general.css ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/general/general.css?");

/***/ }),

/***/ "../frontend/modal/contact/contact.css":
/*!*********************************************!*\
  !*** ../frontend/modal/contact/contact.css ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/modal/contact/contact.css?");

/***/ }),

/***/ "../frontend/modal/privacy/privacy.css":
/*!*********************************************!*\
  !*** ../frontend/modal/privacy/privacy.css ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/modal/privacy/privacy.css?");

/***/ }),

/***/ "../frontend/modal/project/project.css":
/*!*********************************************!*\
  !*** ../frontend/modal/project/project.css ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/modal/project/project.css?");

/***/ }),

/***/ "../frontend/modal/result/result.css":
/*!*******************************************!*\
  !*** ../frontend/modal/result/result.css ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/modal/result/result.css?");

/***/ }),

/***/ "../frontend/sections/cases_section/style.css":
/*!****************************************************!*\
  !*** ../frontend/sections/cases_section/style.css ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/sections/cases_section/style.css?");

/***/ }),

/***/ "../frontend/sections/contacts_section/style.css":
/*!*******************************************************!*\
  !*** ../frontend/sections/contacts_section/style.css ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/sections/contacts_section/style.css?");

/***/ }),

/***/ "../frontend/sections/garantee_section/style.css":
/*!*******************************************************!*\
  !*** ../frontend/sections/garantee_section/style.css ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/sections/garantee_section/style.css?");

/***/ }),

/***/ "../frontend/sections/main_section/style.css":
/*!***************************************************!*\
  !*** ../frontend/sections/main_section/style.css ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/sections/main_section/style.css?");

/***/ }),

/***/ "../frontend/sections/reviews_section/style.css":
/*!******************************************************!*\
  !*** ../frontend/sections/reviews_section/style.css ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://src/../frontend/sections/reviews_section/style.css?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./index.js");
/******/ 	
/******/ })()
;