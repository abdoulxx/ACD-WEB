
<script>
var slider = new MasterSlider();
     
// adds Arrows navigation control to the slider.
 slider.control('arrows');
 slider.control('bullets');

 slider.setup('masterslider' , {
     width:1400,    // slider standard width
     height:810,   // slider standard height
     space:0,
     layout:'fullwidth',
     loop:true,
     preload:0,
     speed:45,
     autoplay:true,
     view:'fade'
});
</script>
