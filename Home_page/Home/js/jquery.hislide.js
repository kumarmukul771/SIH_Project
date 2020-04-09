(function($) {
   
    var slide = function(ele,options) {
        var $ele = $(ele);
     
        var setting = {
        		
            speed: 1000,
           
            interval: 3000,
            
        };
       
        $.extend(true, setting, options);
        
        var states = [
            { $zIndex: 1, width: 120, height: 150, top: 69, left: 214, $opacity: 0.2 },
            { $zIndex: 2, width: 130, height: 170, top: 59, left: 80, $opacity: 0.4 },
            { $zIndex: 3, width: 170, height: 218, top: 35, left: 190, $opacity: 0.7 },
            { $zIndex: 4, width: 224, height: 288, top: 0, left: 343, $opacity: 1 },
            { $zIndex: 3, width: 170, height: 218, top: 35, left: 550, $opacity: 0.7 },
            { $zIndex: 2, width: 130, height: 170, top: 59, left: 700, $opacity: 0.4 },
            { $zIndex: 1, width: 120, height: 150, top: 69, left: 580, $opacity: 0.2 }
        ];

        var $lis = $ele.find('.gunjan');
        var timer = null;

     
        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.find('.hi-prev').on('click', function() {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
        });

        move();
        autoPlay();

      
        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                // if(index==5)
                // {
                //     console.log(index);
                //     var id = "b"+$(element).attr('id');
                //     $(id).css('background','red');
                // }

                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
            });
        }

       
        function next() {
          
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }
    
    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });
      
        return this;
    }
})(jQuery);
