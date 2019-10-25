FROM alpine

RUN apk add --update openjdk11-jre

VOLUME /tmp

ADD /Hello.class Hello.class

RUN touch /Hello.class

CMD ["java", "Hello"]