var formData = {
    'a' : 'selectSitePath',
};
var site_path = $.ajax({
    type : "POST",
    url : "functions/ajaxQuery.php",
    data : formData,
    async : false
}).responseText;
;

/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

var roxyFileman = site_path + '/admin/components/fileman/index.html';

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';

    
    config.extraPlugins = 'widget';

    config.extraPlugins = 'lineutils';

    config.extraPlugins = 'oembed,widget';


    config.filebrowserBrowseUrl = roxyFileman;

    config.filebrowserImageBrowseUrl = roxyFileman + '?type=image';

    config.removeDialogTabs = 'link:upload;image:upload';
    
    

    CKEDITOR.timestamp = '"+Replace(Replace(Replace(Replace(Replace(Replace(CurrDateTime()," ",""),"/",""),"\",""),"-",""),":",""),".","")+"';

    // Define changes to default configuration here:

    config.contentsCss = site_path + '/admin/css/CustomFonts/fonts.css';

    //the next line add the new font to the combobox in CKEditor
    //config.font_names = '<Cutsom Font Name>/<YourFontName>;' + config.font_names;

    config.font_names = 'SILPAKORN70NEW/SILPAKORN70NEW;' + config.font_names;

    config.font_names = 'SILPAKORN70NEW Ita/SILPAKORN70NEW_Ita;' + config.font_names;

    /*-------------------------------------------------------------- HelveticaNeueLTCom ---------------------------------------------------------*/

    config.font_names = 'HelveticaNeueLTCom Bd/HelveticaNeueLTCom-Bd;' + config.font_names;
    config.font_names = 'HelveticaNeueLTCom Cn/HelveticaNeueLTCom-Cn;' + config.font_names;
    config.font_names = 'HelveticaNeueLTCom Hv/HelveticaNeueLTCom-Hv;' + config.font_names;
    config.font_names = 'HelveticaNeueLTCom Lt/HelveticaNeueLTCom-Lt;' + config.font_names;
    config.font_names = 'HelveticaNeueLTCom Md/HelveticaNeueLTCom-Md;' + config.font_names;
    config.font_names = 'HelveticaNeueLTCom Th/HelveticaNeueLTCom-Th;' + config.font_names;

    /*-------------------------------------------------------------- THSarabunNew ---------------------------------------------------------*/

    config.font_names = 'SarabunNew Bold/THSarabunNew-Bold;' + config.font_names;
    config.font_names = 'SarabunNew BoldItalic/THSarabunNew-BoldItalic;' + config.font_names;
    config.font_names = 'SarabunNew Italic/THSarabunNew-Italic;' + config.font_names;

    /*-------------------------------------------------------------- Quark ---------------------------------------------------------*/

    config.font_names = '[TH] Quark Bold/Quark-Bold;' + config.font_names;
    config.font_names = '[TH] Quark Light/Quark-Light;' + config.font_names;

    /*-------------------------------------------------------------- bangna-new ---------------------------------------------------------*/

    config.font_names = '[TH] bangna new/bangna-new;' + config.font_names;

    /*-------------------------------------------------------------- BSRUBANSOMDEJ ---------------------------------------------------------*/

    config.font_names = '[TH] BSRUBANSOMDEJ Black/BSRUBANSOMDEJ-Black;' + config.font_names;
    config.font_names = '[TH] BSRUBANSOMDEJ Bold/BSRUBANSOMDEJ-Bold;' + config.font_names;
    config.font_names = '[TH] BSRUBANSOMDEJ BoldOblique/BSRUBANSOMDEJ-BoldOblique;' + config.font_names;
    config.font_names = '[TH] BSRUBANSOMDEJ Oblique/BSRUBANSOMDEJ-Oblique;' + config.font_names;
    config.font_names = '[TH] BSRUBANSOMDEJ Regular/BSRUBANSOMDEJ-Regular;' + config.font_names;
    config.font_names = '[TH] BSRUBANSOMDEJ SemiBold/BSRUBANSOMDEJ-SemiBold;' + config.font_names;
    
    /*-------------------------------------------------------------- Oxygen ---------------------------------------------------------*/

    config.font_names = 'Oxygen/Oxygen;' + config.font_names;
    config.font_names = 'Oxygen Bold/Oxygen-Bold;' + config.font_names;
    config.font_names = 'Oxygen BoldItalic/Oxygen-BoldItalic;' + config.font_names;
    config.font_names = 'Oxygen Italic/Oxygen-Italic;' + config.font_names;
    config.font_names = 'Oxygen Light/Oxygen-Light;' + config.font_names;
    config.font_names = 'Oxygen LightItalic/Oxygen-LightItalic;' + config.font_names;
    config.font_names = 'Oxygen Thin/Oxygen-Thin;' + config.font_names;
    config.font_names = 'Oxygen ThinItalic/Oxygen-ThinItalic;' + config.font_names;
    
    /*-------------------------------------------------------------- Pero ---------------------------------------------------------*/

    config.font_names = 'Pero Bold/Pero-Bold;' + config.font_names;
    config.font_names = 'Pero ExtraLight/Pero-ExtraLight;' + config.font_names;
    config.font_names = 'Pero Light/Pero-Light;' + config.font_names;
    config.font_names = 'Pero Regular/Pero-Regular;' + config.font_names;
    config.font_names = 'Pero SemiBold/Pero-SemiBold;' + config.font_names;
    config.font_names = 'Pero SemiLight/Pero-SemiLight;' + config.font_names;

};
