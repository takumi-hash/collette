import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class FollowingUser extends Component{
    constructor(){
        super();
        this.state = {
            following: [],
            isFollowing: true,
        };

        this.toggleFollow = this.toggleFollow.bind(this);
    }

    toggleFollow(following){
        if(this.state.isFollowing == true){
            axios
                .post('/api/unfollow', {
                    follow_id: this.props.following.id
                })
                .then((res) => {
                    this.setState({
                        isFollowing: false
                    });
                })
                .catch(error => {
                    console.log(error);
                });
        } else {
            axios
                .post('/api/follow', {
                    follow_id: this.props.following.id
                })
                .then((res) => {
                    this.setState({
                        isFollowing: true
                    });
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }

    render() {
        return (
            <div className="card my-3">
                <div className="card-body">
                    <h5 className="card-title">
                        {this.props.following.name}
                    </h5>
                    <p className="card-text">Following this person.</p>
                    <a href="#" className="btn btn-primary">View More</a>
                    <button className="btn btn-secondary" onClick={this.toggleFollow}>{this.state.isFollowing ? 'Following' : 'Not Following'}</button>
                </div>
            </div>
        );
    }
};
