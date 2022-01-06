/**
 * Change default icons to marerial icons
 */
function changeToMaterial() {
  var materialIconAssoc = {
    'mce-i-code': '<i class="material-icons">code</i>',
    'mce-i-none': '<i class="material-icons">format_color_text</i>',
    'mce-i-bold': '<i class="material-icons">format_bold</i>',
    'mce-i-italic': '<i class="material-icons">format_italic</i>',
    'mce-i-underline': '<i class="material-icons">format_underlined</i>',
    'mce-i-strikethrough': '<i class="material-icons">format_strikethrough</i>',
    'mce-i-blockquote': '<i class="material-icons">format_quote</i>',
    'mce-i-link': '<i class="material-icons">link</i>',
    'mce-i-alignleft': '<i class="material-icons">format_align_left</i>',
    'mce-i-aligncenter': '<i class="material-icons">format_align_center</i>',
    'mce-i-alignright': '<i class="material-icons">format_align_right</i>',
    'mce-i-alignjustify': '<i class="material-icons">format_align_justify</i>',
    'mce-i-bullist': '<i class="material-icons">format_list_bulleted</i>',
    'mce-i-numlist': '<i class="material-icons">format_list_numbered</i>',
    'mce-i-image': '<i class="material-icons">image</i>',
    'mce-i-table': '<i class="material-icons">grid_on</i>',
    'mce-i-media': '<i class="material-icons">video_library</i>',
    'mce-i-browse': '<i class="material-icons">attachment</i>',
    'mce-i-checkbox': '<i class="mce-ico mce-i-checkbox"></i>',
        'mce-i-preview': '<i class="material-icons">remove_red_eye</i>',
        'mce-i-fullscreen': '<i class="material-icons">fullscreen</i>',
        'mce-i-print': '<i class="material-icons">print</i>',
        'mce-i-inserttime': '<i class="material-icons">timer</i>',
        'mce-i-redo': '<i class="material-icons">redo</i>',
        'mce-i-undo': '<i class="material-icons">undo</i>',
        'mce-i-searchreplace': '<i class="material-icons">find_in_page</i>',
        'mce-i-unlink': '<i class="material-icons">link</i>',
        'mce-i-indent': '<i class="material-icons">format_indent_decrease</i>',
        'mce-i-outdent': '<i class="material-icons">format_indent_increase</i>',
        'mce-i-hr': '<i class="material-icons">border_horizontal</i>',
  };

  $.each(materialIconAssoc, function (index, value) {
    $('.' + index).replaceWith(value);
  });
}

function tinySetup(config) {
  if (typeof tinyMCE === 'undefined') {
    setTimeout(function() {
      tinySetup(config);
    }, 100);
    return;
  }

  if (!config) {
    config = {};
  }

  if (typeof config.editor_selector != 'undefined') {
    config.selector = '.' + config.editor_selector;
  }

  if (typeof lang_is_rtl === 'undefined') {
    var lang_is_rtl = '1';
  }

  var default_config = {
    selector: ".rte",
    plugins: "align colorpicker link image filemanager table media placeholder advlist code table autoresize preview searchreplace print insertdatetime hr charmap anchor paste pagebreak contextmenu textcolor emoticons fullscreen",
    browser_spellcheck: true,
    toolbar1: "code,colorpicker,bold,italic,underline,strikethrough,blockquote,link,align,bullist,numlist,table,image,media,formatselect",
    external_filemanager_path: baseAdminDir + "/filemanager/",
    filemanager_title: "File manager",
    external_plugins: {"filemanager": baseAdminDir + "/filemanager/plugin.min.js"},
    language: iso_user,
    content_style : (lang_is_rtl === '1' ? "body {direction:rtl;}" : ""),
    skin: "prestashop",
    menubar: false,
    statusbar: false,
    relative_urls: false,
    convert_urls: false,
    entity_encoding: "raw",
    extended_valid_elements: "em[class|name|id],@[role|data-*|aria-*]",
    valid_children: "+*[*]",
    valid_elements: "*[*]",
    init_instance_callback: "changeToMaterial",
    rel_list:[
      { title: 'nofollow', value: 'nofollow' }
    ],
    content_css : psfplus_editor_skin_tinymce,
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt 42pt 48pt 52pt 58pt 62pt 68pt 72pt"
  };

  $.each(default_config, function (index, el) {
    if (config[index] === undefined)
      config[index] = el;
  });

  // Change icons in popups
  $('body').on('click', '.mce-btn, .mce-open, .mce-menu-item', function () {
    changeToMaterial();
  });

  tinyMCE.init(config);
}
