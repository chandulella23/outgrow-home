git add . && git commit -am "Source commit"

git push origin current-staging-source

git checkout current-staging-source

git pull origin current-staging-source && git commit -am "Pulled changes"

git push origin current-staging-source

jigsaw build ogus && git add build_ogus && git commit -am "Build for ogus"

git subtree push --prefix build_ogus origin staging