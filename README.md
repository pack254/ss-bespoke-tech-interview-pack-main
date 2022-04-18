## Silverstripe Ltd Technical Test

<h2 class="info" style="color: orange">
PLEASE FORK THIS REPO WHEN COMPLETING THE TEST
</h2>

#### Make commits, pull requests etc. against your own fork and send us a link once complete.

#### Please *do not* make commits or pull requests against this repo, or close any of the issues.


## Installation

`composer install`

A `Vagrantfile.dist` is provided to assist with your local set up, but please
set up however you'd like.

A small `ss_tech_test.sql` file is included that you should import in
order to get you started.

See [the "Getting Started" section on the docs site](https://docs.silverstripe.org/en/4/getting_started/)
for more information if you are having trouble setting up.

## Docker Environment

`composer install`

Create `.env` file from `.env.example` then uncomment and update to use docker specific configurations

Use `docker-compose` commands for easier setup below:

Start the docker image
`docker-compose up`

In a new tab, run the installation process
`docker-compose exec web composer dev-build`

Make sure template resources are accessible
`docker-compose exec web composer vendor-expose`

Import database back-up
`docker-compose exec -T web mysql -u root -h db SS_mysite < ./ss_tech_test.sql`

View the website at [http://localhost:8000/](http://localhost:8000/)

View the CMS at [http://localhost:8000/admin](http://localhost:8000/admin)

View emails at [http://localhost:8025/](http://localhost:8025/)

Check the `.env` file to get access codes

## What do I do with this?

This test is designed to mirror the workflow that someone at Silverstripe
might be expected to handle on a daily basis. We end up working on a
mix of bug fixes and new features.

This is a _very_ minimal site that has a couple of page types, one that allows
a candidate to submit a form to apply for a job with us! However, we've just
inherited this site from Not-Very-Good-Dev-Agency and the client has asked
us to fix it up.

**We'd like you to fork this repository** and work through the tickets the client
has raised, and share it with us before your technical interview so we can
check what you've done.

You will see the [list of Bugs and Features as Github Issues](https://github.com/silverstripeltd/ss-bespoke-tech-interview/issues?q=is%3Aissue+is%3Aopen)

Please [start at #1](https://github.com/silverstripeltd/ss-bespoke-tech-interview/issues/1)
and move through them in order, getting as many done as you can.

**Each ticket assumes you have completed the previous one, so bear that in mind**
