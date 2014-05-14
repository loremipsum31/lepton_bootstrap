jQuery(document).ready(function ($) {
    //TOOGLE
    var targetTab = self.document.location.hash;
    if(targetTab!='' && $(targetTab).length>0){
        $('.toggleElement').toggleElement();
        $(targetTab).trigger('click');
    }else{
        $('.toggleElement').toggleElement({firstVisible:true});
    }
});

(function($){
    $.fn.toggleElement = function(options){
        var defaults = {
            firstVisible: false,
            iconOpen: 'icon-plus-sign',
            iconClose: 'icon-minus-sign'
        };
        var options = $.extend(defaults, options);
        this.each(function(i){
            var context = $(this);
            $(context).next('div').hide();
            $(context).prepend('<i class="'+options.iconOpen+'"></i>&nbsp;');
            $(context).css('cursor','pointer');
            $(context).on('click', function(){
                $('i', this).toggleClass(options.iconClose).toggleClass(options.iconOpen);
                $(this).next('div').toggle().toggleClass('active');
                $(this).toggleClass('active');
                return false;
            });
            $(context).hover(function(){
                $(this).addClass('well-section-infos-hover');
            },function(){
                $(this).removeClass('well-section-infos-hover');
            });
        });
        if(options.firstVisible == true){
            $(this).eq(0).trigger('click');
        }
    }
})(jQuery);