function displayPage(tag_group, element) 
{
	//remove class of activetabheader and hide old contents
	var current = element.parentNode.getAttribute("data-current");
	document.getElementById("tabHeader" + tag_group + "_" + current).removeAttribute("class");
	document.getElementById("tabpage" + tag_group + "_" + current).style.display="none";

	//add class of activetabheader to new active tab and show contents
	var ident = element.id.split("_")[1];
	element.setAttribute("class","tabActiveHeader");
	document.getElementById("tabpage" + tag_group + "_" + ident).style.display="block";
	element.parentNode.setAttribute("data-current",ident);
}