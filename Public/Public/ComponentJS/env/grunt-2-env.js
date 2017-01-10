/*
**  ComponentJS -- Component System for JavaScript <http://componentjs.com>
**  Copyright (c) 2009-2016 Ralf S. Engelschall <http://engelschall.com>
**
**  This Source Code Form is subject to the terms of the Mozilla Public
**  License (MPL), version 2.0. If a copy of the MPL was not distributed
**  with this file, You can obtain one at http://mozilla.org/MPL/2.0/.
*/

/* global module: true */
module.exports = function (grunt) {
    /*  build environment  */
    grunt.config.merge({
        jshint: {
            "env": [ "Gruntfile.js", "env/*.js" ]
        },
        eslint: {
            "env": [ "Gruntfile.js", "env/*.js" ]
        },
        jsonlint: {
            "env": {
                src: [
                    "package.json",
                    "env/lint-1-jshint.json",
                    "env/lint-2-eslint.json"
                ]
            }
        },
        mkdir: {
            "env": {
                options: {
                    create: [ "bld" ]
                }
            }
        },
        clean: {
            "env": [ "bld", "cov" ]
        }
    });

    /*  common task aliasing  */
    grunt.registerTask("env-build", [
        "jshint:env",
        "eslint:env",
        "jsonlint:env",
        "mkdir:env"
    ]);
    grunt.registerTask("env-clean", [
        "clean:env"
    ]);
};

