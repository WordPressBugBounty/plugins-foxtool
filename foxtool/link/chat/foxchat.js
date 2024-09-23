document.addEventListener('DOMContentLoaded', function() {
// chat on
let chatlastScrollTop = 0;
const chatmojs = document.getElementById('chat-mojs');
if (chatmojs) {
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > chatlastScrollTop) {
            chatmojs.classList.add('chathi');
        } else {
            chatmojs.classList.remove('chathi');
        }
        chatlastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
    });
}
// navi
let navilastScrollTop = 0;
const navimojs = document.getElementById('navi-mojs');
const navimojsc = document.getElementById('ft-navi-chaton');
const navimojsm = document.getElementById('ft-navi-menu');
if (navimojs) {
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > navilastScrollTop) {
            navimojs.classList.add('navihi');
			if (navimojsc) {
                navimojsc.style.display = 'none';
            }
            if (navimojsm) {
                navimojsm.style.display = 'none';
            }
        } else {
            navimojs.classList.remove('navihi');
        }
        navilastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
    });
}
// navi menu
const foxnavi = document.getElementById('foxnavi');
if (foxnavi) {
	foxnavi.addEventListener('click', function(event) {
		event.preventDefault(); 
		const element = document.querySelector('.ft-navi-me');
		if (element.style.display === 'block') {
			element.style.display = 'none';
		} else {
			element.style.display = 'block';
		}
	});
}
});
