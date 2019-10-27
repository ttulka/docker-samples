FROM alpine

RUN apk add --update openjdk11-jre

VOLUME /tmp

COPY /Hello.class Hello.class

RUN touch /Hello.class

CMD ["java", "Hello"]