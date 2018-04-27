window.onload=function(){
	
	//购物车的移入移出时间
	var topCart=document.getElementById("top-cart");
	var cartMenu=document.getElementById("cart-menu");
	topCart.onmouseover=function(){
		cartMenu.style.display='block';
	};
	topCart.onmouseout=function(){
		cartMenu.style.display='none';
	};
	
	//原banner图上的二级导航，
	var categoryItem=document.getElementsByClassName("category-item");
	var children=document.getElementsByClassName("children");
	for(i=0;i<categoryItem.length;i++){
		categoryItem[i].index=i;
		categoryItem[i].onmouseover=function(){
			children[this.index].style.display='block';
		};
		categoryItem[i].onmouseout=function(){
			children[this.index].style.display='none';
		};
	}
	
	//头部二级导航
	var navItm=document.getElementsByClassName("nav-itm");
	var childrenList=document.querySelectorAll(".head-nav-menu .children-list");
	var J_navMenu=document.getElementById("J_navMenu");
	
	for(i=0;i<navItm.length;i++){
		navItm[i].index=i;
		navItm[i].onmouseover=function(){
			J_navMenu.style.display='block';
			childrenList[this.index].style.display='block';
		};
		navItm[i].onmouseout=function(){
			J_navMenu.style.display='none';
			childrenList[this.index].style.display='none';
		};
		
		
	var book=['小米手机6','小米手机5X','红米note4X','红米手机4X','小米2','手环','耳机','充电宝','运动鞋','路由器','小米盒子','电视'];
    		var search=document.getElementById("search");
    		var J_keywordList=document.getElementById("J_keywordList");
    		var lis=document.getElementsByTagName('li');	//动态获取li的个数
    		var last=null;	//上一个选中的元素
    		
    		//生成元素
    		createData(book);
    		function createData(arr){
    			J_keywordList.innerHTML='';	//先清空，要不然的话，再次创建的内容是累加的形式
    			
    			for(var i=0;i<arr.length;i++){
    				var li=document.createElement("li");
    				li.index=i;
    				li.innerHTML=arr[i];
    				li.onclick=J_keywordListClick;
    				
    				J_keywordList.appendChild(li);
    			}
    		};
    		
    		//表单事件：onsearch,onkeydown,onclick,onkeyup
    		
    		//输入框点击的时候要显示列表
    		search.onclick=function(ev){
    			J_keywordList.style.display='block';
    			ev.cancelBubble=true;
    		};
    		
    		//点击其它地方的时候要隐藏列表
    		document.onclick=function(){
    			J_keywordList.style.display='none';
    		};
    		
    		
    		//每个li标签的点击事件
    		function J_keywordListClick(){
    			if(last && last!=this){
    				last.className='';
    			}
    			
    			if(this.className==''){
    				//console.log(1);
    				//这个条件成立说明现在自己身上没有class
    				this.className='keyword-list-active';
    				search.value=this.innerHTML;
    				last=this;
    			}else{
    				this.className='';
    				search.value='';
    				
    			}
    		};
    		
    		
    		//输入框删除功能
    		search.oninput=function(){
    			//alert(2);
    			var str=this.value;	//用户删除后剩下的内容
    			var newData=[];		//存储能找到的数据
    			
    			//根据用户删除后剩下的内容去book里找匹配的数据，找到后放在一个新的数组中
    			for(var i=0;i<book.length;i++){
    				if(book[i].indexOf(str)!=-1){
    					//这个条件成立说明在book的数组中找到了str
    					newData.push(book[i]);
    				}
    			}
    			
    			//console.log(newData);
    			createData(newData);
    			J_keywordList.style.display='block';		//在删除的时候让列表显示出来
    		};
    		
    		
	
		};
	
	//小明星单品的左右切换
	var hdPrev=document.getElementById("hd-prev");
	var hdNext=document.getElementById("hd-next");
	var bdList=document.getElementById("bd-list");
	
	hdPrev.onclick=function(){
		move(bdList,{'left':-1200},1500,'linear');	
	};
	hdNext.onclick=function(){
		move(bdList,{'left':0},1500,'linear');	
	};
	setInterval(function(){
		move(bdList,{'left':-1200},2000,'linear')
		setTimeout(function(){
			move(bdList,{'left':0},2000,'linear')
		},50000)
		
	},60000)
	
	//移入出现一个评价
	var bdListM=document.getElementsByClassName("bd-list-m");
	var wrapper=document.getElementsByClassName("wrapper");
	for(i=0;i<bdListM.length;i++){
		bdListM[i].index=i
		bdListM[i].onmouseenter=function(){
			move(wrapper[this.index],{'bottom':0},500,'linear')
		}
		bdListM[i].onmouseleave=function(){
			move(wrapper[this.index],{'bottom':-91},500,'linear')
		}
	}
	
	//每个分类下边的十六个span切换
	var  hdList=document.querySelectorAll(".hd-list_J");
	var  bdRight=document.querySelectorAll(".bd-right_J");
	for(i=0;i<hdList.length;i++){
		hdList[i].index=i
		hdList[i].onmouseenter=function(){
			for(i=0;i<bdRight.length;i++){
				bdRight[i].style.display='none';
				hdList[i].className='';
			}
			bdRight[this.index].style.display='block';
			this.setAttribute('class','first');
		}
	}
	
	//为你推荐的左右切换
	var bdPrev=document.getElementById("bdPrev");
	var bdNext=document.getElementById("bdNext");
	var bd_List=document.getElementById("bdList");
	
	bdPrev.onclick=function(){
		var bd_List_left=bd_List.offsetLeft;
		if(bd_List_left==0){
			return;
		}
		move(bd_List,{'left':bd_List_left+1208},1500,'linear');	
	};
	bdNext.onclick=function(){
		var bd_List_left=bd_List.offsetLeft;
		if(bd_List_left==-3624){
			return;
		}
		move(bd_List,{'left':bd_List_left-1208},1500,'linear');	
	};
	setInterval(function(){
		var bd_List_left=bd_List.offsetLeft;
		if(bd_List_left==0){
			zheng();
		}
		if(bd_List_left==-3624){
			fan()
		}
	},60000)
	function zheng(){
		setInterval(function(){
			var bd_List_left=bd_List.offsetLeft;
			move(bd_List,{'left':bd_List_left-1208},2000,'linear')
			setTimeout(function(){
				move(bd_List,{'left':bd_List_left+1208},2000,'linear')
			},50000)
		
		},60000)
	}
	function fan(){
		setInterval(function(){
			var bd_List_left=bd_List.offsetLeft;
			move(bd_List,{'left':bd_List_left+1208},2000,'linear')
			setTimeout(function(){
				move(bd_List,{'left':bd_List_left-1208},2000,'linear')
			},50000)
		
		},60000)
	}
	
	//内容的左右切换
	var wrapPrev=document.getElementsByClassName("wrapPrev");
	var wrapNext=document.getElementsByClassName("wrapNext");
	var wrapperList=document.getElementsByClassName("wrapperList");
	var pagers=document.getElementsByClassName("pagers");	
	for(i=0;i<wrapPrev.length;i++){
		//获取每一个span
		wrapPrev[i].index=i;
		wrapPrev[i].onclick=function(){
			var wrapperList_left=wrapperList[this.index].offsetLeft;
			var x=0;
			var y=this.index;
			if(wrapperList_left!=0){
				move(wrapperList[this.index],{'left':wrapperList_left+289},1500,'linear',function(){
					wrapperList_left=wrapperList[y].offsetLeft;
					x=wrapperList_left/289;
					//获取每一个span
					var pager_lis=pagers[y].querySelectorAll('.pagers ul li');
					for(i=0;i<pager_lis.length;i++){
						pager_lis[i].className='';
					}
				
					pager_lis[Math.abs(x)].className='pager';
				});
			}
		};
		var I=i;
		wrapNext[I].index=i;
		wrapNext[I].onclick=function(){
			var wrapperList_left=wrapperList[this.index].offsetLeft;
			var x=0;
			var y=this.index;
			if(wrapperList_left==-578&&wrapNext[0]==this){
				return;
			}
			if(wrapperList_left!=-867){
				move(wrapperList[this.index],{'left':wrapperList_left-289},1500,'linear',function(){
					wrapperList_left=wrapperList[y].offsetLeft;
					x=wrapperList_left/289;
					//获取每一个span
					var pager_lis=pagers[y].querySelectorAll('.pagers ul li');
					for(i=0;i<pager_lis.length;i++){
						pager_lis[i].className='';
					}
				
					pager_lis[Math.abs(x)].className='pager';
				});
			}
		};
	}

		//侧边导航栏
		var rightNav=document.getElementById("right-nav");
		var rightNav_p=rightNav.querySelectorAll("p");
		var boxHd=document.getElementsByClassName("box-hd");
		var arr=[];
		for(i=0;i<rightNav_p.length;i++){
			arr.push(boxHd[i].getBoundingClientRect().top);
		}
		console.log(arr)
		window.onscroll=function(){
			var t=document.documentElement.scrollTop||document.body.scrollTop;
			t>=500?move(rightNav,{right:0},500,'linear'):move(rightNav,{right:-76},500,'linear');
		};
		for(i=0;i<rightNav_p.length;i++){
			rightNav_p[i].index=i;
			var T=0;
			rightNav_p[i].onclick=function(){
				var t=document.documentElement.scrollTop||document.body.scrollTop;
					T=Math.floor(t);
					t=arr[this.index];
				for(i=0;i<rightNav_p.length;i++){
					rightNav_p[i].style.className='';
				}
				this.style.className='active';
				var timer=setInterval(function(){
					T>t?T-=10:T+=10;
					if(T>t){
						T-=10;
						if(T-10<t){
							T-=1;
						}
					}else if(T<t){
						T+=10;
						if(T+10>t){
							T+=1
						}
					}
					window.scrollTo(0,T);
					if(T==t){
						clearInterval(timer);
					}
				},16)
			}
		}
	
	
	



}
