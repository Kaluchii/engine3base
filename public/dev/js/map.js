$(document).ready(function () {
    try {
        DG.then(function () {
            mainIcon = DG.icon({
                iconUrl: '/img/EUR.png',
                iconSize: [60, 80],
                iconAnchor: [30, 70],
                shadowUrl: '/img/EUR_shadow.png',
                shadowSize: [80, 90],
                shadowAnchor: [49, 73]
            });
            map = DG.map('map', {
                center: [43.2595, 76.92738],
                zoom: 16,
                scrollWheelZoom: false
            });
            DG.marker([43.259505, 76.92738], {icon: mainIcon, riseOnHover: true}).addTo(map);
            $('.map-nav-item:first-child .link').click();
        });
        var markersGroup;
        $('.map-nav-item .link').on('click', function () {
            var category = $(this).data('category');
            var markersArray = [];
            for (var categoryItemKey in sourceMark) {
                var categoryItem = sourceMark[categoryItemKey];
                if (category == categoryItem['slug'] || category == 'all') {
                    for (var subCategoryItemKey in categoryItem) {
                        var subCategoryItem = categoryItem[subCategoryItemKey];

                        Icon = DG.icon({
                            iconUrl: subCategoryItem['icon'],
                            iconSize: [38, 54],
                            iconAnchor: [19, 54],
                            shadowUrl: '/img/pointer-shadow.png',
                            shadowSize: [54, 63],
                            shadowAnchor: [33, 54]
                        });
                        for (var marksKey in subCategoryItem['marks']) {
                            var marks = subCategoryItem['marks'][marksKey];
                            markersArray.push(DG.marker([marks.lat, marks.lon], {
                                icon: Icon,
                                riseOnHover: true
                            }).bindLabel(marks.title, {offset: [20, -25]}));
                        }
                    }

                }
            }
            if (typeof(markersGroup) != 'undefined') {
                markersGroup.removeFrom(map);
            }
            markersGroup = DG.featureGroup(markersArray);
            markersGroup.addTo(map);
        });
    } catch (e) {
        $('.map-img-wrap').show();
        $('.map-nav').hide();
        $('#map').hide();
    }
});