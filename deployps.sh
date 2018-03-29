#git add . && git commit -am "Source commit for production-stable-source"

#git checkout production-stable-source
git checkout production-stable-lp

git pull origin production-stable-lp && git commit -am "Pulled changes"

git push origin production-stable-lp

jigsaw build ogps && git add build_ogps && git commit -am "Build for production-stable"
#jigsaw serve ogps
git subtree push --prefix build_ogps origin production-stable