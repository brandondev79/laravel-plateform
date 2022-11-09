function handleSearchCompany(event) {
    const keywords = event.target.value;
    const $cards = $('.card-profile');
    const pattern = new RegExp(keywords, 'ig');

    
    console.log($cards);

    $.each($cards, (key, card) => {
        const $card = $(card);
        const company = $card.data('company');

        if(pattern.test(company)) {
            $card.parent().parent().show();
        } else {
            $card.parent().parent().hide();
        }
    })
}

function handleClickButtonAdd() {
    const $modal = $('#add-mission');
    $modal.modal('show');
}

$(function() {
    const $search = $('.search-active');
    const $button = $('.btn-add');
    $search.on('input', handleSearchCompany);
    $button.on('click', handleClickButtonAdd);
});