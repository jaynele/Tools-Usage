<?php 
//window客户端github客户端下载地址windows.github.com  we get it...
//bash下载地址 git-for-windows.github.io   
//git bash 下操作
//$ git config --global user.name
//cd ..
//mkdir
//git init
/////////vim . sublim .phpstorm edit it
//git status
//git add .
//git commit -m "push something"
/////////when we update the file,we also should not forget some action as below
//git add .
//git commit -m "update something"
/////////when we want to add some files and at the same time delete some files we can try it like this...
//touch ..
//git add .
//git commit -m ""
//ls
//git rm 
//git commit -m ""
//ls
///////here we should create a new repository 
//git remote add origin https://github.com/jaynele/test.git
//git pull origin master
//git push origin master
//////another person work with you 
//////we should need a organization and need another person work with us
/////another person do like this...
//cd ..
//git clone https://github.com/oncejay/test.git
//cd ..
//ls
///////other things
//git add .
//git rm
//git mv
//git log
//git log test.php
//git log .
//git log --pretty=oneline
//////版本切换
//git reflog
//git reset --hard HEAD^
//git reset --hard HEAD^^
//vim 查看内容
//////利用版本号来切换
//git reset --hard 6207e59
//git reset --hard 6207
/////分支管理
//git branch
//git branch dev
//git checkout dev
//git branch
/////合并分支,回到master分支
//git merge dev
//////删除分支
//git branch -d dev
/////创建并切换到dev分支
//git checkout -b dev
//////查看远程仓库
//git remote
/////查看远程仓库地址
//git remote -v
//////删除远程库
//git remote remove origin
/////添加远程库
//git remote add origin ......
/////修改远程库名称
//git remote rename origin ori





