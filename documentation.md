Key data
============

- name of the plugin: Hide Breadcrumbs Plugin
- author: Svantje Lilienthal
- current version: 0.1
- tested on OMP version: 1.2.0
- github link: https://github.com/langsci/hideBreadcrumbs
- community plugin: yes
- date: 2016/10/17

Description
============

This plugin hides all breadcrumbs, by replacing the template with an empty string.
 
Implementation
================

Hooks
-----
- used hooks: 1

		TemplateManager::include

New pages
------
- new pages: 0

Templates
---------
- templates that replace other templates: 1

	frontend/components/breadcrumbs.tpl

- templates that are modified with template hooks: 0
- new/additional templates: 0

Database access, server access
-----------------------------
- reading access to OMP tables:  no
- writing access to OMP tables: no
- new tables: 0
- nonrecurring server access: no
- recurring server access: no
 
Classes, plugins, external software
-----------------------
- OMP classes used (php): 2

		GenericPlugin
		TemplateManager

- OMP classes used (js, jqeury, ajax): 0
- necessary plugins: 0
- optional plugins: 0
- use of external software: no
- file upload: no
 
Metrics
--------
- number of files: 6 (without external software)
- number of lines: 239 (without external software)

Settings
--------
- settings: no

Plugin category
----------
- plugin category: generic

Other
=============
- does using the plugin require special (background)-knowledge?: no
- access restrictions: no
- adds css: no