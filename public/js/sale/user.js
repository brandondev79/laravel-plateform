function handleDownloadPDF(id) {
    window.location = '/pdf-download/' + id;
}

function handleClickCard() {
    const $this = $(this);
    const $modalProfile = $('.modal-profile');
    const fullName = $this.data('first-name') + ' ' + $this.data('last-name');
    $modalProfile.find('.profile-title').text(fullName);
    $modalProfile.find('.profile-description').text($this.data('job-type'));
    $modalProfile.find('.profile-role').text($this.data('role'));
    $modalProfile.find('.profile-full-name').text($this.data(fullName));
    $modalProfile.find('.profile-email').text($this.data('email'));
    $modalProfile.find('.profile-year-of-experience').text($this.data('year-of-experience'));
    $modalProfile.find('.profile-download-this-resume').on('click', () => handleDownloadPDF($this.data('id')));
    $modalProfile.find('.profile-download-anonymous-resume').on('click', () => handleDownloadPDF($this.data('id')));
    $modalProfile.modal('show');
}

function handleSearch(event) {
    const target = '.card-profile';
    const keywords = event.target.value;
    filterProfileByName(target, keywords);
}

$(function() {
    const $card = $('.card-clickable');
    const $search = $('.search-active');
    $card.on('click', handleClickCard);
    $search.on('input', handleSearch);
});