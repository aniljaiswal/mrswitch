
//Newsletter subscription handler script
var submitted=false;

$('#subscribe-form').submit(function(event) 
{
  event.preventDefault();
  var email = $('#email-input').val();

  var messageBox = $('#subscribe-form > .message');
  var token = $('#subscribe-form > input[name="_token"]').val();

  if(email)
  {
    $.ajax({
      url: "/subscribe",
      type: 'POST',
      dataType : "json",
      data : ({email: email, _token: token}),
      success : function(data) {
          $('#email-input').val('');
          messageBox.hasClass('alert-danger') ? messageBox.removeClass('alert-danger') : messageBox.addClass('alert-success');
          messageBox
            .text("Successfully subscribed!")
            .delay(4000)
            .fadeOut(2500)
            .show();
      },
      error : function(xhr) {
        var message = JSON.parse(xhr.responseText).email[0];
        messageBox.hasClass('alert-success') ? messageBox.removeClass('alert-success') : messageBox.addClass('alert-danger');
        messageBox.show().text(message).delay(2000).fadeOut(2500);
      }
    });
  }
  else
  {
    messageBox.hasClass('alert-success') ? messageBox.removeClass('alert-success') : messageBox.addClass('alert-danger');
    messageBox.show().text('Enter a valid email!').show().delay(2000).fadeOut(2500);
  }

});

//Enquiry form submission on home page
function check_submitted()
{
  if(submitted) 
  {
    $('#ss-form > div.clearfix').remove();
    $('.signup-form > form')
      .append('<p class="lead" style="color:#999;margin-top:20px">Thank you for your interest. Our representative will get back to you within 60 minutes.</p>');
  }
}

// Deferred loading of address google map on contact page
$(window).load(function(){
  $('#address-map').attr('src', "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d875.3008485265921!2d77.19210499999998!3d28.653627999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM5JzEzLjEiTiA3N8KwMTEnMzEuNiJF!5e0!3m2!1sen!2sin!4v1435763487300");
});

/** jQuery Scroll to Top Control script- (c) Dynamic Drive DHTML code library: http://www.dynamicdrive.com. */
var scrolltotop={
  
  setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
  controlHTML: '<i class="fui-arrow-up backtotop"></i>', 
  controlattrs: {offsetx:10, offsety:10}, 
  anchorkeyword: '#top',

  state: {isvisible:false, shouldvisible:false},

  scrollup:function(){
    if (!this.cssfixedsupport) 
      this.$control.css({opacity:0}) 
    var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
    if (typeof dest=="string" && jQuery('#'+dest).length==1) 
      dest=jQuery('#'+dest).offset().top
    else
      dest=0
    this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
  },

  keepfixed:function(){
    var $window=jQuery(window)
    var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
    var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
    this.$control.css({left:controlx+'px', top:controly+'px'})
  },

  togglecontrol:function(){
    var scrolltop=jQuery(window).scrollTop()
    if (!this.cssfixedsupport)
      this.keepfixed()
    this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
    if (this.state.shouldvisible && !this.state.isvisible){
      this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
      this.state.isvisible=true
    }
    else if (this.state.shouldvisible==false && this.state.isvisible){
      this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
      this.state.isvisible=false
    }
  },
  
  init:function(){
    jQuery(document).ready(function($){
      var mainobj=scrolltotop
      var iebrws=document.all
      mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest
      mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
      mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
        .css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, left:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer', 'z-index':9999})
        .attr({title:'Back to Top'})
        .click(function(){mainobj.scrollup(); return false})
        .appendTo('body')
      if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='')
        mainobj.$control.css({width:mainobj.$control.width()})
      mainobj.togglecontrol()
      $('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
        mainobj.scrollup()
        return false
      })
      $(window).bind('scroll resize', function(e){
        mainobj.togglecontrol()
      })
    })
  }
}

scrolltotop.init()