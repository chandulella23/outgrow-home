git add . && git commit -am "Source commit"

git push origin jigsawhome

jigsaw build ogco && git add build_ogco && git commit -am "Build for production"

git subtree push --prefix build_ogco origin gh-pages
