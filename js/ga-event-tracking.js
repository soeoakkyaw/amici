/**
 * Modified from Google Analyticator (http://ronaldheft.com/code/analyticator/)
 *
 * Author: Derick Ng (derick@clickrmedia.com)
 */
var analyticsFileTypes = ['jpg','jpeg','gif','png','txt','doc','docx','xls','xlsx','pdf','ppt','pptx','pps','ppsx','odt','ods','odp','mp3','mov','m4v','mp4','mpeg','avi','ogg','oga','ogv','wmv','ico'];

jQuery(document).ready(function() {

	jQuery('a').each(function() {
		var a = jQuery(this);
		var href = a.attr('href');
		
		// Check if the a tag has a href, if not, stop for the current link
		if ( href == undefined )
			return;
		
		var url = href.replace('http://','').replace('https://','');
		var hrefArray = href.split('.').reverse();
		var extension = hrefArray[0].toLowerCase();
		var hrefArray = href.split('/').reverse();
		var domain = hrefArray[2];
	
 		if ( jQuery.inArray(extension,analyticsFileTypes) != -1 ) {
			// If the link is a download
			a.click(function() {
				ga('send', 'event', 'Downloads', extension.toUpperCase(), href);
			});
		} else if ( href.match(/^http/) && !href.match(document.domain) ) {
			// If the link is external
			a.click(function() {
				ga('send', 'event', 'Outbound Traffic', href.match(/:\/\/(.[^/]+)/)[1], href);
			});
		} else if ( href.match(/^mailto:/) ) {
			// If link is mailto
			a.click(function() {
				ga('send', 'event', 'Emails', href.match(/:(.[^\?]+)/)[1], href);
			});
		} else if ( href.match(/^tel:/) ) {
			// If link is tel
			a.click(function() {
				ga('send', 'event', 'Calls', href.match(/:(.[^\?]+)/)[1], href);
			});
		}
	});

});