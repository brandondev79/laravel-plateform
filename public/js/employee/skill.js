function handleSearchSkill(event) {
    const keywords = event.target.value;
    const $cards = $('.category-body');
    const $items = $('.skill-tag');
    const pattern = new RegExp(keywords, 'ig');

    // Hide item not match keywords
    $.each($items, (key, item) => {
        const $item = $(item);
        const content = $item.text().trim();

        // Filter by skill
        if(pattern.test(content)) {
            $item.show();
        } else {
            $item.hide();
        }
    });

    // Hide card does not have item
    $.each($cards, (key, card) => {
        const $card = $(card);
        const $badgeItem = $card.find('.skill-tag');
        const filterVisibleItem = $('.skill-tag:not([style*="display: none"])', $card);
        const numberOfVisibleItem = filterVisibleItem.length;
        // debugger;

        if(numberOfVisibleItem > 0) {
            $card.parent().show();
        } else {
            $card.parent().hide();
        }
    })
}

$(function() {
    const $search = $('.search-active');
    $search.on('input', handleSearchSkill);
});