export default {
    posts: {
        getAll: () => axios.get('/api/posts/getAll'),
        getPostBySlug: slug => axios.get('/api/posts/getPostBySlug', {
            params: {
                slug
            }
        }),
    }
};
