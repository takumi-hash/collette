import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Post extends Component{
    constructor(){
        super();
        this.state = {
            Post: [],
        };
    }

    render() {
        return (
            <a className="card my-3" href={'/posts/' + this.props.post.id}>
                <div className="card-body">
                    <h5 className="card-title">{this.props.post.title}</h5>
                    <p className="card-text">{this.props.post.user.name}</p>
                    <p className="card-text">{this.props.post.body.length > 100 ? this.props.post.body.substring(0,100) + "...": this.props.post.body}</p>
                </div>
            </a>
        );
    }
};
