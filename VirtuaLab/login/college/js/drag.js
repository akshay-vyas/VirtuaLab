// JavaScript Document
var hover_color='#E7AB83';var bound=25;var speed=20;var forbid='forbid';var trash='trash';var trash_ask=false;var drop_option='single';var delete_cloned=true;var obj=false;var obj_margin;var mouseButton=0;var mouseX,mouseY;var window_width=0,window_height=0;var scroll_width,scroll_height;var edgeX=0,edgeY=0;var bgcolor_old;var tables;var autoscrollX_flag=autoscrollY_flag=0;var moved_flag=0;var cloned_flag=0;var cloned_id=0
var table=table_old=table_source=null;var row=row_old=row_source=null;var cell=cell_old=cell_source=null;
window.onload=function(){tables=document.getElementById('drag').getElementsByTagName('table');handler_onresize();window.onresize=handler_onresize;var divs=document.getElementById('drag').getElementsByTagName('div');for(var i=0;i
<divs.length;i++)
if(divs[i].className.indexOf('drag')>-1)
divs[i].onmousedown=handler_onmousedown;var imgs=document.getElementById('drag').getElementsByTagName('img');for(var i=0;i<imgs.length;i++)imgs[i].onmousemove=function(){return false};document.onselectstart=function(e){var evt=e||window.event;if(!isFormElement(evt))return false}
window.onscroll=calculate_cells;}

function handler_onresize(){if(typeof(window.innerWidth)=='number'){window_width=window.innerWidth;window_height=window.innerHeight;}
else if(document.documentElement&&(document.documentElement.clientWidth||document.documentElement.clientHeight)){window_width=document.documentElement.clientWidth;window_height=document.documentElement.clientHeight;}
else if(document.body&&(document.body.clientWidth||document.body.clientHeight)){window_width=document.body.clientWidth;window_height=document.body.clientHeight;}
scroll_width=document.documentElement.scrollWidth;scroll_height=document.documentElement.scrollHeight;calculate_cells();}

function handler_onmousedown(e){var evt=e||window.event;if(isFormElement(evt))return true;obj=this;if(obj.className.indexOf('clone')==-1)obj.style.zIndex=999;mouseX=evt.clientX;mouseY=evt.clientY;set_tcr(evt);table_source=table;row_source=row;cell_source=cell;if(evt.which)mouseButton=evt.which;else mouseButton=evt.button;if(mouseButton==1){moved_flag=0;cloned_flag=0;document.onmousemove=handler_onmousemove;document.onmouseup=handler_onmouseup;myhandler_clicked();}
bgcolor_old=tables[table].rows[row].cells[cell].style.backgroundColor;var offset=box_offset(obj);obj_margin=[mouseY-offset[0],offset[1]-mouseX,offset[2]-mouseY,mouseX-offset[3]];return false;}

function handler_onmouseup(e){var destination_cell,source_cell;var destination_elements,destination_elements_length;mouseButton=0;obj.style.left=0;obj.style.top=0;obj.style.zIndex=10;if(table
<tables.length)
destination_cell=tables[table].rows[row].cells[cell];else
destination_cell=tables[table_old].rows[row_old].cells[cell_old];destination_cell.style.backgroundColor=bgcolor_old;document.onmousemove=null;document.onmouseup=null;scroll_width=document.documentElement.scrollWidth;scroll_height=document.documentElement.scrollHeight;autoscrollX_flag=autoscrollY_flag=0;table_old=row_old=cell_old=null;if(moved_flag==0){myhandler_notmoved();destination_cell.appendChild(obj);}
else if(cloned_flag==1&&table_source==table&&row_source==row&&cell_source==cell){obj.parentNode.removeChild(obj);myhandler_notcloned();}
else if(cloned_flag==1&&delete_cloned==true&&table>=tables.length){obj.parentNode.removeChild(obj);myhandler_notcloned();}
else if(destination_cell.className.indexOf(trash)>-1){obj.parentNode.removeChild(obj);if(trash_ask)setTimeout(trash_delete,10);else myhandler_deleted();}
else if(drop_option=='switch'){source_cell=tables[table_source].rows[row_source].cells[cell_source];obj.parentNode.removeChild(obj);destination_elements=destination_cell.getElementsByTagName('DIV');destination_elements_length=destination_elements.length
for(var i=0;i<destination_elements_length;i++){source_cell.appendChild(destination_elements[0]);}
destination_cell.appendChild(obj);if(destination_elements_length)myhandler_switched();else myhandler_dropped();}
else{myhandler_dropped();destination_cell.appendChild(obj);}
tables[table_source].rows[row_source].className=tables[table_source].rows[row_source].className;destination_cell.parentNode.className=destination_cell.parentNode.className;calculate_cells();}

function handler_onmousemove(e){var evt=e||window.event;if(moved_flag==0&&obj.className.indexOf('clone')>-1){clone_obj();cloned_flag=1;myhandler_cloned();}
else if(moved_flag==0){myhandler_moved();}
moved_flag=1;if(evt.clientX>obj_margin[3]&&evt.clientX<window_width-obj_margin[1])obj.style.left=(evt.clientX-mouseX)+"px";if(evt.clientY>obj_margin[0]&&evt.clientY<window_height-obj_margin[2])obj.style.top=(evt.clientY-mouseY)+"px";set_tcr(evt);if(table
<tables.length&&(table!=table_old||cell!=cell_old||row!=row_old)){if(table_old!=null&&row_old!=null&&cell_old!=null)
tables[table_old].rows[row_old].cells[cell_old].style.backgroundColor=bgcolor_old;bgcolor_old=tables[table].rows[row].cells[cell].style.backgroundColor;tables[table].rows[row].cells[cell].style.backgroundColor=hover_color;table_old=table;row_old=row;cell_old=cell;}
if(evt.which)mouseButton=evt.which;else mouseButton=evt.button;if(mouseButton!=1){handler_onmouseup(evt);return;}
edgeX=bound-(window_width/2>evt.clientX?evt.clientX-obj_margin[3]:window_width-evt.clientX-obj_margin[1]);if(edgeX>0){if(edgeX>bound)edgeX=bound;edgeX*=evt.clientX<window_width/2?-1:1;if(autoscrollX_flag++==0){window.onscroll=null;autoscrollX()}}
else edgeX=0;edgeY=bound-(window_height/2>evt.clientY?evt.clientY-obj_margin[0]:window_height-evt.clientY-obj_margin[2]);if(edgeY>0){if(edgeY>bound)edgeY=bound;edgeY*=evt.clientY<window_height/2?-1:1;if(autoscrollY_flag++==0){window.onscroll=null;autoscrollY()}}
else edgeY=0;evt.cancelBubble=true;if(evt.stopPropagation)evt.stopPropagation();}

function autoscrollX(call){var old=0;var scrollPosition=getScrollPosition('X');if(mouseButton==1&&((edgeX<0&&scrollPosition>0)||(edgeX>0&&scrollPosition<(scroll_width-window_width)))){window.scrollBy(edgeX,0);old=scrollPosition;scrollPosition=getScrollPosition('X');obj.style.left=(parseInt(obj.style.left)+scrollPosition-old)+"px";mouseX-=scrollPosition-old;setTimeout("autoscrollX('recursive')",speed);}
else{if(call=='recursive')calculate_cells();window.onscroll=calculate_cells;autoscrollX_flag=0;}}

function autoscrollY(call){var top;var old=0;var scrollPosition=getScrollPosition('Y');if(mouseButton==1&&((edgeY<0&&scrollPosition>0)||(edgeY>0&&scrollPosition<(scroll_height-window_height)))){window.scrollBy(0,edgeY);old=scrollPosition;scrollPosition=getScrollPosition('Y');top=(isNaN(parseInt(obj.style.top))?0:parseInt(obj.style.top));obj.style.top=(top+scrollPosition-old)+"px";mouseY-=scrollPosition-old;setTimeout("autoscrollY('recursive')",speed);}
else{if(call=='recursive')calculate_cells();window.onscroll=calculate_cells;autoscrollY_flag=0;}}

function getScrollPosition(d){var scrollX,scrollY;if(typeof(window.pageYOffset)=='number'){scrollX=window.pageXOffset;scrollY=window.pageYOffset;}
else if(document.body&&(document.body.scrollLeft||document.body.scrollTop)){scrollX=document.body.scrollLeft;scrollY=document.body.scrollTop;}
else if(document.documentElement&&(document.documentElement.scrollLeft||document.documentElement.scrollTop)){scrollX=document.documentElement.scrollLeft;scrollY=document.documentElement.scrollTop;}
else scrollX=scrollY=0;if(d=='X')return scrollX;else return scrollY}

function calculate_cells(){var i,j;for(i=0;i
<tables.length;i++){var row_offset=new Array();var tr=tables[i].getElementsByTagName('tr');for(j=tr.length-1;j>=0;j--)row_offset[j]=box_offset(tr[j]);tables[i].offset=box_offset(tables[i]);tables[i].row_offset=row_offset;}}
function set_tcr(evt){var offsetLeft,offsetRight;var cell_current;for(table=0;table
<tables.length;table++){if(tables[table].offset[3]<evt.clientX&&evt.clientX<tables[table].offset[1]&&tables[table].offset[0]<evt.clientY&&evt.clientY<tables[table].offset[2]){var row_offset=tables[table].row_offset;for(row=0;row<row_offset.length-1&&row_offset[row][0]<evt.clientY;row++)
if(evt.clientY<=row_offset[row][2])break;do{var cells=tables[table].rows[row].cells.length-1;for(cell=cells;cell>=0;cell--){offsetLeft=row_offset[row][3]+tables[table].rows[row].cells[cell].offsetLeft;offsetRight=offsetLeft+tables[table].rows[row].cells[cell].offsetWidth;if(offsetLeft<=evt.clientX&&evt.clientX<offsetRight)break;}}
while(cell==-1&&row-->0)
cell_current=tables[table].rows[row].cells[cell];if(cell_current.className.indexOf(forbid)>-1){table=table_old;row=row_old;cell=cell_old;break;}
if(drop_option=='single'&&cell_current.childNodes.length>0){if(cell_current.childNodes.length==1&&cell_current.firstChild.nodeType==3)break;var has_content=false;for(var i=cell_current.childNodes.length-1;i>=0;i--){if(cell_current.childNodes[i].className&&cell_current.childNodes[i].className.indexOf('drag')>-1){has_content=true;break;}}
if(has_content&&table_old!=null&&row_old!=null&&cell_old!=null){if(table_source!=table||row_source!=row||cell_source!=cell){table=table_old;row=row_old;cell=cell_old;break;}}}
break;}}}

function box_offset(box){var oLeft=0-getScrollPosition('X');var oTop=0-getScrollPosition('Y');var box_old=box;do{oLeft+=box.offsetLeft;oTop+=box.offsetTop}while(box=box.offsetParent);return[oTop,oLeft+box_old.offsetWidth,oTop+box_old.offsetHeight,oLeft];}

function clone_obj(){var obj_new=obj.cloneNode(true);document.getElementById('obj_new').appendChild(obj_new);var offset=box_offset(obj);var offset_dragged=box_offset(obj_new);obj_new.style.top=(offset[0]-offset_dragged[0])+"px";obj_new.style.left=(offset[3]-offset_dragged[3])+"px";obj_new.onmousedown=handler_onmousedown;obj_new.className=obj_new.className.replace('clone','');obj_new.innerHTML+='';obj_new.id=obj.id+'Clone'+cloned_id;cloned_id++;mouseX-=parseInt(obj_new.style.left);mouseY-=parseInt(obj_new.style.top);obj=obj_new;}

function trash_delete(){var div_text='element';var border;if(obj.className.indexOf('t1')>0)border='green';else if(obj.className.indexOf('t2')>0)border='blue';else border='orange';if(obj.getElementsByTagName('INPUT').length||obj.getElementsByTagName('SELECT').length)
div_text='form element';else if(obj.innerText||obj.textContent)
div_text='"'+(obj.innerText||obj.textContent)+'"';if(confirm('Delete '+div_text+' ('+border+') from\n table '+table_source+', row '+row_source+' and column '+cell_source+'?')){myhandler_deleted();}
else{tables[table_source].rows[row_source].cells[cell_source].appendChild(obj);calculate_cells();myhandler_undeleted();}}
function isFormElement(evt){var formElement;var srcName;if(evt.srcElement)srcName=evt.srcElement.tagName;else srcName=evt.target.tagName;switch(srcName){case'INPUT':case'SELECT':case'OPTION':formElement=true;break;default:formElement=false;}
return formElement;}

function toggle_confirm(chk){trash_ask=chk.checked;}
function toggle_delete_cloned(chk){delete_cloned=chk.checked;}
function set_drop_option(radio_button){drop_option=radio_button.value}
function message(text){document.getElementById('message').innerHTML=text;}
function myhandler_clicked(){message('Clicked');}
function myhandler_moved(){message('Moved');}
function myhandler_notmoved(){message('Not moved');}
function myhandler_dropped(){message('Dropped');}
function myhandler_switched(){message('Switched');}
function myhandler_cloned(){message('Cloned');}
function myhandler_notcloned(){message('Not cloned');}
function myhandler_deleted(){message('Deleted');}
function myhandler_undeleted(){message('Undeleted');}