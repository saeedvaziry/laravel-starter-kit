class Api {
    constructor() {
        this.baseUrl = '';
    }

    call(requestType, url, data = null, headers = []) {
        return new Promise((resolve, reject) => {
            let finalUrl = null;
            if (/^(f|ht)tps?:\/\//i.test(url)) {
                finalUrl = url
            } else {
                finalUrl = this.baseUrl + url
            }
            window.axios[requestType](finalUrl, data, headers).then(response => {
                resolve(response);
            }).catch(({ response }) => {
                reject(response);
            });
        });
    }
}

export default Api;
