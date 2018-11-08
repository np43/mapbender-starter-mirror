(function ($) {
    'use strict';

    $.widget('mapbender.mbCanvasRotation', $.mapbender.mbBaseElement, {
        options: {
            target: null
        },
        mapWidgetPromise: null,
        _create: function() {
            this.mapWidgetPromise = Mapbender.elementRegistry.waitReady(this.options.target);
            $('form input', this.element).on('click', this._onRadioClick.bind(this));
        },
        _onRadioClick: function(evt) {
            var degrees = $('form input:checked', this.element).val();
            var radians = degrees * Math.PI / 180;
            this.mapWidgetPromise.then(function(mapWidget) {
                mapWidget.model.map.getView().animate({rotation: radians});
            }, function() {
                Mapbender.error("Karteninitialiserung fehlgeschlagen");
            });
        }
    });
})(jQuery);
