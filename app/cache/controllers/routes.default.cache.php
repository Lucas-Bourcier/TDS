<?php
return array("/home/"=>["controller"=>"controllers\\IndexCrudController","action"=>"home","parameters"=>[],"name"=>"crud.home","cache"=>false,"duration"=>0],"/users/(index/)?"=>["controller"=>"controllers\\CrudUsersController","action"=>"index","parameters"=>[],"name"=>"crudUsers.index","cache"=>false,"duration"=>0],"/users/updateMember/(.+?)/(.*?)"=>["controller"=>"controllers\\CrudUsersController","action"=>"updateMember","parameters"=>[0,"~1"],"name"=>"crudUsers.updateMember","cache"=>false,"duration"=>0],"/users/refresh_/"=>["controller"=>"controllers\\CrudUsersController","action"=>"refresh_","parameters"=>[],"name"=>"crudUsers.refresh_","cache"=>false,"duration"=>0],"/users/edit/(.*?)"=>["controller"=>"controllers\\CrudUsersController","action"=>"edit","parameters"=>["~0","~1"],"name"=>"crudUsers.edit","cache"=>false,"duration"=>0],"/users/newModel/(.*?)"=>["controller"=>"controllers\\CrudUsersController","action"=>"newModel","parameters"=>["~0"],"name"=>"crudUsers.newModel","cache"=>false,"duration"=>0],"/users/editMember/(.+?)/"=>["controller"=>"controllers\\CrudUsersController","action"=>"editMember","parameters"=>[0],"name"=>"crudUsers.editMember","cache"=>false,"duration"=>0],"/users/display/(.*?)"=>["controller"=>"controllers\\CrudUsersController","action"=>"display","parameters"=>["~0","~1"],"name"=>"crudUsers.display","cache"=>false,"duration"=>0],"/users/delete/(.+?)/"=>["controller"=>"controllers\\CrudUsersController","action"=>"delete","parameters"=>[0],"name"=>"crudUsers.delete","cache"=>false,"duration"=>0],"/users/refreshTable/(.*?)"=>["controller"=>"controllers\\CrudUsersController","action"=>"refreshTable","parameters"=>["~0"],"name"=>"crudUsers.refreshTable","cache"=>false,"duration"=>0],"/users/updateModel/"=>["controller"=>"controllers\\CrudUsersController","action"=>"updateModel","parameters"=>[],"name"=>"crudUsers.updateModel","cache"=>false,"duration"=>0],"/users/showDetail/(.+?)/"=>["controller"=>"controllers\\CrudUsersController","action"=>"showDetail","parameters"=>[0],"name"=>"crudUsers.showDetail","cache"=>false,"duration"=>0],"/users/detailClick/(.+?)/(.*?)"=>["controller"=>"controllers\\CrudUsersController","action"=>"detailClick","parameters"=>[0,"~1","~2"],"name"=>"crudUsers.detailClick","cache"=>false,"duration"=>0],"/(.+?)/showDetail/(.+?)/"=>["controller"=>"controllers\\IndexCrudController","action"=>"showDetail","parameters"=>[0],"name"=>"indexCrud.showDetail","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/showModelClick/(.+?)/"=>["controller"=>"controllers\\IndexCrudController","action"=>"showModelClick","parameters"=>[0],"name"=>"indexCrud.showModelClick","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/updateMember/(.+?)/(.*?)"=>["controller"=>"controllers\\IndexCrudController","action"=>"updateMember","parameters"=>[0,"~1"],"name"=>"indexCrud.updateMember","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/refresh_/"=>["controller"=>"controllers\\IndexCrudController","action"=>"refresh_","parameters"=>[],"name"=>"indexCrud.refresh_","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/edit/(.*?)"=>["controller"=>"controllers\\IndexCrudController","action"=>"edit","parameters"=>["~0","~1"],"name"=>"indexCrud.edit","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/newModel/(.*?)"=>["controller"=>"controllers\\IndexCrudController","action"=>"newModel","parameters"=>["~0"],"name"=>"indexCrud.newModel","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/editMember/(.+?)/"=>["controller"=>"controllers\\IndexCrudController","action"=>"editMember","parameters"=>[0],"name"=>"indexCrud.editMember","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/display/(.*?)"=>["controller"=>"controllers\\IndexCrudController","action"=>"display","parameters"=>["~0","~1"],"name"=>"indexCrud.display","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/delete/(.+?)/"=>["controller"=>"controllers\\IndexCrudController","action"=>"delete","parameters"=>[0],"name"=>"indexCrud.delete","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/refreshTable/(.*?)"=>["controller"=>"controllers\\IndexCrudController","action"=>"refreshTable","parameters"=>["~0"],"name"=>"indexCrud.refreshTable","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/updateModel/"=>["controller"=>"controllers\\IndexCrudController","action"=>"updateModel","parameters"=>[],"name"=>"indexCrud.updateModel","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/detailClick/(.+?)/(.*?)"=>["controller"=>"controllers\\IndexCrudController","action"=>"detailClick","parameters"=>[0,"~1","~2"],"name"=>"indexCrud.detailClick","cache"=>false,"duration"=>0,"main.params"=>["resource"]],"/(.+?)/(index/)?"=>["controller"=>"controllers\\IndexCrudController","action"=>"index","parameters"=>[],"name"=>"crud.index","cache"=>false,"duration"=>0,"main.params"=>["resource"]]);
