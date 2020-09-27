export default {
    posts: {
        getAll: (page) => axios.get('/api/posts/getAll', {
            params: {
                page
            }
        }),
        getPostBySlug: slug => axios.get('/api/posts/getPostBySlug', {
            params: {
                slug
            }
        }),
    }
};
