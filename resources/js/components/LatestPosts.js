import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Post from './Post'

export default class LatestPosts extends Component{
    constructor(){
        super();
        this.state = {
            posts: [],
        }
        this.posts = this.getLatestPosts.bind(this);
        this.deletePost = this.deletePost.bind(this);
    }

    componentDidMount(){
        this.getLatestPosts();
    }

    getLatestPosts(){
        axios
            .get('/api/post/all')
            .then((res) => {
                this.setState({
                    posts: res.data
                });
            })
            .catch(error => {
                console.log(error);
            });
    }


    deletePost(post){
        axios
            .post('/api/post/delete', {
                id: post.id
            })
            .then((res) => {
                this.setState({
                    posts: res.data
                });
            })
            .catch(error => {
                console.log(error);
            })
    }

    render() {
        return this.state.posts.map(post => {
            return(
                <Post key={post.id} post={post} deletePost={this.deletePost}/>
            );
        });
    }
};
