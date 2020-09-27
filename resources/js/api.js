export default {
    posts: {
        getAll: () => {
            return axios.get('/api/posts/getAll')
        }
    }
};
