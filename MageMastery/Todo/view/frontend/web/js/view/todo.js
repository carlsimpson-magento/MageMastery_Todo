define([
    'uiComponent',
    'jquery'
    ], function (Component) {
    'use strict';

    return Component.extend({
        defaults : {
            tasks : [
                {label: "Task A"},
                {label: "Task B"},
                {label: "Task C"},
                {label: "Task D"}
            ]
        },

        initObservable: function () {
            this._super().observe(['tasks']);

            return this;
        },

        switchStatus: function (data, event) {
            const taskId = $(event.target).data('id');

            var items = this.tasks().map(function (task) {
                if (task.id === taskId) {
                    task.status = !task.status;
                }
                return task
            });

            this.tasks(items);
        },

    });
});