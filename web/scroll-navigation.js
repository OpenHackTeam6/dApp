'use strict';

    function scrollNav(offset,navCont,dataCont,linkClass,activeClass,contentClass){
        this.navCont = navCont || 'nav';
        this.dataCont = dataCont || 'scrollNavData';
        this.linkClass = linkClass || 'scrollNav-links';
        this.activeClass = activeClass || 'scrollNav-active';
        this.contentClass = contentClass || 'scrollNav-content';
        this.offset = offset || 100;
        this.winH = $(window).height();
        this.docH = $(document).height();
    }

    scrollNav.prototype.init = function(){
        var _self = this;
        
        _self.contentBlocks = $('.'+_self.dataCont).find('.'+_self.contentClass);

        if(!_self.contentBlocks.length === 0){
            console.log('no content');
            return false;
        }
        //get pos of each elements
        _self.elePos = [];
        
        _self.contentBlocks.each(function(element) {
            _self.elePos.push( {top: _self.contentBlocks[element].offsetTop} );
        });

        $(window).on('scroll',_self.scrollHandler.bind(_self));
    }

    scrollNav.prototype.scrollHandler = function() {
        var _self = this;
        //get current pos
        var currPos = $(window).scrollTop();
        var i;
        for(i = 0; i < _self.elePos.length-1; i++) {

             if(currPos > _self.elePos[i].top  - _self.offset && currPos < _self.elePos[i+1].top) {
                $('.'+_self.linkClass).removeClass(_self.activeClass);
                $('.'+_self.linkClass).eq(i).addClass(_self.activeClass);
            }
        }

        if(currPos + _self.winH == _self.docH) {
            //for last item
            $('.'+_self.linkClass).removeClass(_self.activeClass);
            $('.'+_self.linkClass).last().addClass(_self.activeClass);
        }

    }
//<script type="text/javascript">
  function changes(fr) {
    if(fr==1) {
    //뿌려줄값을 배열로정렬
    num = new Array("1)첫번째목록","1)두번째목록","1)세번째목록");
    vnum = new Array("1","2","3");
    } else if(fr==2) {
      num = new Array("2)첫번째목록","2)두번째목록","2)세번째목록");
    vnum = new Array("1","2","3");
    }
    // 셀렉트안의 리스트를 기본값으로 한다..
  for(i=0; i<form.test2.length; i++) {
    form.test2.options[0] = null;
  }
    //포문을 이용하여 두번째(test2)셀렉트 박스에 값을 뿌려줍니당)
  for(i=0;i < num.length;i++) {
    document.form.test2.options[i] = new Option(num[i],vnum[i]);
  }
}
//</script>
