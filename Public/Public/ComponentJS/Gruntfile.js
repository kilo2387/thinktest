/*
**  ComponentJS -- Component System for JavaScript <http://componentjs.com>
**  Copyright (c) 2009-2016 Ralf S. Engelschall <http://engelschall.com>
**
**  This Source Code Form is subject to the terms of the Mozilla Public
**  License (MPL), version 2.0. If a copy of the MPL was not distributed
**  with this file, You can obtain one at http://mozilla.org/MPL/2.0/.
*/

/* global module: true */
/* global require: true */

module.exports = function (grunt) {
    /*  initial task configuration  */
    grunt.initConfig({
        version:        grunt.file.readYAML("VERSION"),
        version_string: "<%= version.major %>.<%= version.minor %>.<%= version.micro %>"
    });

    /*  common task aliasing  */
    grunt.registerTask("default", [ "build" ]);
    grunt.registerTask("build",   [ "env-build", "src-build", "doc-build" ]);
    grunt.registerTask("cleanup", [ "doc-clean", "src-clean", "env-clean" ]);

    /*  load foreign tasks  */
    require("load-grunt-tasks")(grunt, { pattern: "grunt-*" });

    /*  load own tasks  */
    grunt.loadTasks("env");
};

