function setWithTTL(key, value, ttlSeconds) {
    const now = Date.now();
    const expiresAt = now + ttlSeconds * 1000;

    const item = {
        value: value,
        expiresAt: expiresAt
    };

    localStorage.setItem(key, JSON.stringify(item));
}

function getWithTTL(key) {
    const itemStr = localStorage.getItem(key);
    if (!itemStr) return null;

    try {
        const item = JSON.parse(itemStr);
        if (Date.now() > item.expiresAt) {
            localStorage.removeItem(key); // удалить, если устарело
            return null;
        }
        return item.value;
    } catch (e) {
        return null;
    }
}

jQuery(document).ready(function(){
    var ls_sat_visit = 'sat_visit';
    var ls_ref_name = 'source_url';
    var ls_fvt_name = 'fvt';
    var ls_ffu_name = 'ffu';

    const has_sat_visit = getWithTTL(ls_sat_visit);
    const has_ref       = localStorage.getItem(ls_ref_name);
    const has_fvt       = localStorage.getItem(ls_fvt_name);
    const has_ffu       = localStorage.getItem(ls_ffu_name);

    //referrer
    if(!has_ref) {
        const ref = document.referrer;
        const isInternal = ref && new URL(ref).hostname === location.hostname;
        const firstRef = (!ref || isInternal) ? 'direct' : ref;

        localStorage.setItem(ls_ref_name, firstRef);
    }

    // full first URL
    if(!has_ffu) {
        const ffu = window.location.search || '';
        localStorage.setItem(ls_ffu_name, ffu);
    }


    if (!has_sat_visit) {
        setTimeout(function(){
            $.get("/api/v1/add-visit", function(response) {
                setWithTTL(ls_sat_visit, 1, 3600);

                if (!has_fvt) {
                    const fvt = (response && response.fvt)
                        ? parseInt(response.fvt)
                        : Math.floor(Date.now() / 1000);

                    localStorage.setItem(ls_fvt_name, fvt);
                }
            });
        }, 1000);
    }
});
