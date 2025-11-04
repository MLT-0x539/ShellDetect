    function contentToIframe() {
        var iframe = document.querySelector('iframe[name="' + this.target + '"]'),
            curDisplay = iframe.style.display,
            position = iframe.getBoundingClientRect();
        iframe.src = this.href;
	
        if (!curDisplay || curDisplay !== 'block') {
           iframe.style.display = 'block';
            position = iframe.getBoundingClientRect();
        }
        window.scrollTo(position.left, position.top);
    }

    var links = document.querySelectorAll('a[target]');
    for (var i = 0, len = links.length; i < len; i++) {
        links[i].addEventListener('click', contentToIframe);
    }
