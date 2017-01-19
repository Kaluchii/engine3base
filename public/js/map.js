$(document).ready(function () {
    DG.then(function () {
        map = DG.map('map', {
            center: [43.2595, 76.92738],
            zoom: 16,
            scrollWheelZoom: false,
        });
        DG.marker([43.259815, 76.92738]).addTo(map);
        $('.map-nav-item:first-child .link').click();
    });
    var markersGroup;
    $('.map-nav-item .link').on('click', function () {
        var category = $(this).data('category');
        /*удалить все маркеры*/
        for (var categoryItemKey in sourceMark) {
            var categoryItem = sourceMark[categoryItemKey];
            if (category == categoryItem['slug']) {
                var markersArray = [];
                for (var subCategoryItemKey in categoryItem) {
                    var subCategoryItem = categoryItem[subCategoryItemKey];

                    Icon = DG.icon({
                        iconUrl: subCategoryItem['icon'],
                        iconSize: [38, 54],
                        iconAnchor: [19, 54],
                        shadowUrl: '../img/pointer-shadow.png',
                        shadowSize: [54, 63],
                        shadowAnchor: [33, 54],
                    });
                    for (var marksKey in subCategoryItem['marks']) {
                        var marks = subCategoryItem['marks'][marksKey];
                        markersArray.push(DG.marker([marks.lat, marks.lon], {icon: Icon, riseOnHover: true}).bindLabel(marks.title, {offset: [20, -25]}));
                    }
                }
                if (typeof(markersGroup) != 'undefined') {
                    markersGroup.removeFrom(map);
                }
                markersGroup = DG.featureGroup(markersArray);
                markersGroup.addTo(map);
            }
        }
    });
});