window.addEventListener('load', function() {
    const mobileTrigger = document.querySelector('.morunner-mobile-trigger');
    const topMenu = document.querySelector('.top-menu');

    mobileTrigger.addEventListener('click', function() {

        topMenu.classList.toggle('active');

        if (topMenu.classList.contains('active')) {
            mobileTrigger.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        } else {
            mobileTrigger.innerHTML = '<i class="fa-solid fa-bars"></i>';
        }

    });

    const blockElement = document.querySelectorAll('.wp-block-create-block-mor-slider');
    
    blockElement.forEach(function(item) {
  
      if (item) {
        // Detach the children
        while (item.firstChild) {
          item.parentNode.insertBefore(item.firstChild, item);
        }
  
        // Remove the empty parent element
        item.parentNode.removeChild(item);
    }
  
    });

    const generic01 = document.querySelectorAll('.generic01-type');


    
    const postElement = document.querySelectorAll('.mo-runner-post');

    if (postElement.length > 0) {

        const postElementH1 = document.querySelector('.masthead__title').textContent;
        const postElementRow = document.querySelectorAll('.mor-stops__stop');

        postElementRow.forEach(function(item) {
            const h3 = item.querySelector('.h3');
            if (h3) {
                const h3Text = h3.textContent;
                if (h3Text === postElementH1) {
                    item.classList.add('active');
                }
                
    }});
    }


    //check if the class mor-stops-tabs exists
    const tabs = document.querySelector('.mor-stops-tabs');

    if(tabs) {

        const tabsElements = document.querySelectorAll('.mor-stops-tabs__stop');
        tabsElements.forEach(function(item, index) {
            if (index > 0) {
                item.style.display = 'none';
            }
        });


        const tabsList = document.querySelector('.mor-stops-tabs__tabs');
        const tabsListItems = tabsList.querySelectorAll('li');
        tabsListItems[0].classList.add('active');
        tabsList.addEventListener('click', function(e) {
            const tabsListItems = tabsList.querySelectorAll('li');
            tabsListItems.forEach(function(item) {
                item.classList.remove('active');
            });
            const target = e.target;
            e.target.classList.add('active');
            const dataId = target.getAttribute('data-id');
            const tabsElements = document.querySelectorAll('.mor-stops-tabs__stop');
            tabsElements.forEach(function(item) {
                item.style.display = 'none';
            });
            const tab = document.querySelector('.mor-stops-tabs__stop[data-id="' + dataId + '"]');
            tab.style.display = 'grid';
            

        });

    }

});