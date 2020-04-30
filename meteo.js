var latitude = [48.58];
var longitude = [7.75];



const options = {
    // Required: API key
    key: 'OhPQjI1knSx1kHK8PDn4LXsZDqU3M11R',

    // Put additional console output
    verbose: true,

    // Optional: Initial state of the map
    lat: 48.58,
    lon: 7.75,
    zoom: 5,
};

windyInit(options, windyAPI => {
    const { picker, utils, broadcast } = windyAPI;

    picker.on('pickerOpened', latLon => {
        // picker has been opened at latLon coords
        console.log(latLon);

        const { lat, lon, values, overlay } = picker.getParams();
        // -> 48.4, 14.3, [ U,V, ], 'wind'
        console.log(lat, lon, values, overlay);

        const windObject = utils.temp2obj(values);
        console.log(tempObject);
    });

    picker.on('pickerMoved', latLon => {
        // picker was dragged by user to latLon coords
        console.log(latLon);
    });

    picker.on('pickerClosed', () => {
        // picker was closed
    });

    // Wait since wather is rendered
    broadcast.once('redrawFinished', () => {
        picker.open({ lat: 48.4, lon: 14.3 });
        // Opening of a picker (async)
    });
});