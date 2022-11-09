var searchFilter = 'title';

$(document).ready(function () {

    // $('#birthday, #seniority').datepicker($.datepicker.regional[ "fr" ]);

// all input:text
    $('.row-border, .home-row-border').dblclick(function() {
        $(this).find('span').hide();
        $(this).find('input, select, .hide-from-form').show().focus();
    });

    $('.row-border > td > input, .home-row-border > td > input').blur(function () {
        $(this).hide();
        $(this).prev('span').show();
        var name = $(this).attr('name');
        var val = $(this).val();

        if((name === 'birthday' || name === 'seniority') && val.length) {
            var tmp = val.split('-');
            val = tmp[2] + '/' + tmp[1] + '/' + tmp[0];
        }

        $(this).prev('span').text(val);
    });
    //
// radio buttons
    $('.row-border-with-radiobox input').click(function () {
       $(this).parents('.hide-from-form').prev('span').text($(this).data('val')).show();
       $(this).parents('.hide-from-form').hide();
    });


// language selectbox
    $('#languageSelectbox').on('change blur', function () {
        $(this).prev('span').show().text($(this).find('option:selected').text());
        $(this).hide();
    });

    $('.image-de-profil').click(function () {
        $('.thumbnail-input').click();
    });

    $('.thumbnail-input').change(function () {
        $('.image-de-profil').css('background-image', 'none');
        $('#newImageUploadTitle').show();
    });

    $('.btn-form').click(function () {
        $(this).toggleClass('btn-ajouter');
        if($(this).hasClass('btn-ajouter')) {
            skillsVar.push($(this).data('id'));
        } else {
            skillsVar = skillsVar.filter(item => item !== $(this).data('id'));
        }
        $('#skill_ids').val(skillsVar);
        console.log(skillsVar);
    });

/*    $('.search-button').click(function (event){
        event.preventDefault();
       $.get('/skillsSearch', function (data) {
           console.log(data);
       });
    });*/

    $('.fa-trash-alt-custom').click(function () {
       var conf = confirm("Êtes-vous sûr de vouloir effacer toutes les compétences?");
       if(conf) {
           $('#clearSkills').submit();
       }
    });

    $('body').on('click', '.search-item', function () {
        var method;
        var id = $(this).data('id');
        method = $(this).hasClass('active') ? 'attachSkill' : 'detachSkill';
        $.get('/' + method + '/' + id, function () {
            $('#skill' + id).click();
        });
    });

    $('.search-close').click(function () {
        $('.search-results').hide();
    });


    $('#emptyResults').css('width', $('#skillsSearchInput').outerWidth() + $('.search-button').outerWidth() + 'px');

    // live search with new popup
    function skillsSearch() {
        var input = $('#skillsSearchInput');
        var container = $('#searchResults');
        var template = '';
        if(input.val().length >= 2) {
            $.get('employee/skillsSearch', {keyword: input.val()}, function (data) {
                $('.search-results').show();
                if(data.length) {
                    data.forEach(function (e) {
                        template += '<li class="list-group-item search-item" data-id="' + e.id + '" ' + (e.checked ? 'data-checked="true"' : '') + '> ' + e.title + '<span class="search-cat"> (' + e.category.title + ')</span></li>';
                    });
                    container.html(template);
                    makeSelectable();
                    $('#emptyResults').hide();
                } else {
                    container.html('');
                    $('#emptyResults').show();
                }

            });
        } else {
            $('.search-results').hide();
        }
    }

    function skillSearchFilter() {
        var keyword = $('#skillsSearchInput').val().toLowerCase();
        var hideContainer, anyMatch;
        if(keyword.length >= 2) {
            anyMatch = false;
            $('.category-container').each(function () {
                hideContainer = true;
                $(this).children('.skill-tag').each(function () {
                    if ($(this).data('title').indexOf(keyword) >= 0) {
                        hideContainer = false;
                        anyMatch = true;
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                if (hideContainer) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
            if(!anyMatch) {
                $('#emptyResults').show();
            } else {
                $('#emptyResults').hide();
            }
        } else {
            $('.category-container, .skill-tag').show();
        }
    }

    function adminSearch() {
        var keyword = $('#adminSearchInput').val().toLowerCase();
        var hideContainer, anyMatch;
        if(keyword.length >= 2) {
            anyMatch = false;
            $('.admin-search-container').each(function () {
                hideContainer = true;
                $(this).children('td.checkthis').each(function () {
                    if ($(this).data('title').indexOf(keyword) >= 0) {
                        hideContainer = false;
                        anyMatch = true;
                    }
                });
                if (hideContainer) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        } else {
            $('.admin-search-container').show();
        }
    }


    function saleSearch() {
        var keyword = $('#saleSearchInput').val().toLowerCase();
        var hideContainer, anyMatch;
        if(keyword.length >= 2) {
            anyMatch = false;
            $('.sale-search-container').each(function () {
                hideContainer = true;
                $(this).children('td.checkthis').each(function () {
                    if ($(this).data(searchFilter).indexOf(keyword) >= 0) {
                        hideContainer = false;
                        anyMatch = true;
                    }
                });
                if (hideContainer) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        } else {
            $('.sale-search-container').show();
        }
    }

    var searchInterval;

    $('#skillsSearchInput').keyup(function () {
        clearTimeout(searchInterval);
        searchInterval = setTimeout(skillSearchFilter, 300);
    });

    $('#adminSearchInput').keyup(function () {
        clearTimeout(searchInterval);
        searchInterval = setTimeout(adminSearch, 300);
    });

    $('.sale-filter-btn').click(function () {
        $('.sale-filter-btn').removeClass('active');
        $(this).addClass('active');

        if($(this).index() === 0) {
            searchFilter = 'title';
        } else if($(this).index() === 1) {
            searchFilter = 'formations';
        } else {
            searchFilter = 'skills';
        }

        saleSearch();

    });

    $('#saleSearchInput').keyup(function () {
        clearTimeout(searchInterval);
        searchInterval = setTimeout(saleSearch, 300);
    });



});
