export default function (doc) {
    if (doc.isBroken) {
        return '/not-found';
    }
    console.log(doc)
    if (doc.type === 'home') {
        return '/';
    }

    if (doc.type === 'page') {
        return '/page/' + doc.uid;
    }

    return '/not-found';
};
