const map = new ol.Map({
    view: new ol.View({
        center: [51256659.25147474, 1545218.3765220067],
        zoom: 6,

    }),
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    target: 'map'
});

const OpenstreetMapStandrad = new ol.layer.Tile({
    source: new ol.source.OSM()

});
const OpenstreetMapHumanitarian = new ol.layer.Tile({
    source: new ol.source.OSM({
        url: 'https://tile.openstreetmap.be/osmbe/{z}/{x}/{y}.png',
    }),
    visible: false,
    title: 'OSMHumanitarian'
});


map.on('click', function(e) {
    console.log(e.coordinate);
});