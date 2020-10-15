define(['uiComponent'], function (Component) {
    'use strict';

    return Component.extend({
        defaults : {
            tasks : [
                {label: "Task A"},
                {label: "Task B"},
                {label: "Task C"},
                {label: "Task D"}
            ]
        }
    });
});