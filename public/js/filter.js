function filterProfileByName(target, keywords) {
    const $targets = $(target);
    const pattern = new RegExp(keywords, 'ig');

    $.each($targets, (key, target) => {
        const $target = $(target);
        const fullName = $target.data('first-name') + ' ' + $target.data('last-name');

        // Filter by name
        if(pattern.test(fullName)) {
            $target.parent().show()
        } else {
            $target.parent().hide();
        }
    });
}