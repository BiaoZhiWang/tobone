/**
 * Created by wangbiaozhi on 2017/2/24.
 */
/*首页使用require实现*/
requirejs.config({
    baseUrl:'./',
    paths:{
        anime:'js/lib/anime.min',
        charming:'js/lib/charming.min',
        textfx:'js/js/common/textfx',
        ajax:'js/js/common/ajax',
        articleTemplate:'js/js/home/home-articleTemplate',
        index:'js/js/home/home-index',
        search:'js/lib/search',
        noise:'js/lib/simplex-noise.min',
        canvas:'js/js/common/canvas',
        template:'js/lib/template-native'
    },
    shim:{
        textfx:{
            deps:['anime']
        },
        canvas:{
            dep:['noise']
        },
        articleTemplate:{
            deps:['ajax']
        },
        index:{
            deps:['charming','anime','textfx','noise','canvas','template','ajax','search','articleTemplate']
        }
    }
});
require(['canvas','textfx','articleTemplate','index'],function(){
    console.log('运行');
});