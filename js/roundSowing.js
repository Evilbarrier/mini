	var homeBanner=document.getElementById("homeBanner");//最大父级
	var bannerSlide=document.getElementById("bannerSlide");//ul
	var uiPrev=document.getElementById("uiPrev");
	var uinext=document.getElementById("uinext");
	var imges=document.getElementsByClassName("imges");//li
	var w=imges[0].offsetWidth;
	var moving=true;
	
	function mov(){
		moving=false;
		move(bannerSlide,{left:-w},1000,'linear',function(){
			bannerSlide.appendChild(imges[0]);
			this.style.left=0;
			
			moving=true;
		});
	}
	function movPrev(){
		moving=false;
		bannerSlide.insertBefore(imges[imges.length-1],imges[0]);
		bannerSlide.style.left=-w+'px';	//不要让最后一张图一下来就显示出来
		move(bannerSlide,{left:0},1000,'linear',function(){
			moving=true;
		});
	}
	
	var timer=setInterval(mov,4000)
	
	//上一张
	uiPrev.onclick=function(){
		movPrev();
	};
	//上一张
	uinext.onclick=function(){
		mov();
	};
	
	//鼠标定位让他停止
	homeBanner.onmouseover=function(){
		clearInterval(timer);
	};
	homeBanner.onmouseout=function(){
		timer=setInterval(mov,4000);
	}
	
	var roundItem=document.getElementsByClassName("round-item");
	for(i=0;i<roundItem.length;i++){
		roundItem[i].index=i;
		roundItem[i].onclick=function(){
			var imgThis=this.index;
			move(bannerSlide,{left:-w*this.index},1000,'linear',function(){
				for(j=0;j<imgThis;j++){
					bannerSlide.appendChild(imges[j]);
				}
				this.style.left=0;
				
				moving=true;
			});
		}
	}
